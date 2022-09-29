<?php

use Chiribuc\Teamwork\Enums\ContentType;
use Chiribuc\Teamwork\Exceptions\ErrorException;
use Chiribuc\Teamwork\Exceptions\TransporterException;
use Chiribuc\Teamwork\Exceptions\UnserializableResponseException;
use Chiribuc\Teamwork\Transporters\HttpTransporter;
use Chiribuc\Teamwork\ValueObjects\ApiToken;
use Chiribuc\Teamwork\ValueObjects\Transporter\BaseUri;
use Chiribuc\Teamwork\ValueObjects\Transporter\Headers;
use Chiribuc\Teamwork\ValueObjects\Transporter\Payload;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\Request as Psr7Request;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Client\ClientInterface;

beforeEach(function () {
    $this->client = Mockery::mock(ClientInterface::class);

    $apiToken = ApiToken::from('foo');

    $this->http = new HttpTransporter(
        $this->client,
        BaseUri::from('domain.teamwork.com/desk/api/v2'),
        Headers::withAuthorization($apiToken)->withContentType(ContentType::JSON),
    );
});

test('request object', function () {
    $payload = Payload::list('inboxes');

    $response = new Response(200, [], json_encode([
        'abgsd',
    ]));

    $this->client
        ->shouldReceive('sendRequest')
        ->once()
        ->withArgs(function (Psr7Request $request) {
            expect($request->getMethod())->toBe('GET')
                ->and($request->getUri())
                ->getHost()->toBe('domain.teamwork.com')
                ->getScheme()->toBe('https')
                ->getPath()->toBe('/desk/api/v2/inboxes.json');

            return true;
        })->andReturn($response);

    $this->http->requestObject($payload);
});

test('request object response', function () {
    $payload = Payload::list('inboxes');

    $response = new Response(200, [], json_encode([
        "inboxes" => [
            [
                "id"    => 123456,
                "name"  => "Inbox Name 1",
                "email" => "support@crobert.ro",
            ],
            [
                "id"    => 12345,
                "name"  => "Inbox Name 2",
                "email" => "market_support@crobert.ro",
            ],
        ],
    ]));

    $this->client
        ->shouldReceive('sendRequest')
        ->once()
        ->andReturn($response);

    $response = $this->http->requestObject($payload);

    expect($response)->toBe([
        "inboxes" => [
            [
                "id"    => 123456,
                "name"  => "Inbox Name 1",
                "email" => "support@crobert.ro",
            ],
            [
                "id"    => 12345,
                "name"  => "Inbox Name 2",
                "email" => "market_support@crobert.ro",
            ],
        ],
    ]);
});

test('request object server errors', function () {
    $payload = Payload::list('inboxes');

    $response = new Response(401, [], json_encode([
        'errors' => [
            'id'     => '4c871383-e8a6-4625-9327-ca08640c1537',
            'title'  => 'Failed To Validate Token',
            'code'   => 'G401',
            'detail' => 'failed to validate token',
        ],
    ]));

    $this->client
        ->shouldReceive('sendRequest')
        ->once()
        ->andReturn($response);

    expect(fn() => $this->http->requestObject($payload))
        ->toThrow(function (ErrorException $e) {
            expect($e->getMessage())
                ->toBe('Failed To Validate Token')
                ->and($e->getErrorId())
                ->toBe('4c871383-e8a6-4625-9327-ca08640c1537')
                ->and($e->getErrorTitle())
                ->toBe('Failed To Validate Token')
                ->and($e->getErrorCode())
                ->toBe('G401')
                ->and($e->getErrorDetail())
                ->toBe('failed to validate token');
        });
});

test('request object serialization errors', function () {
    $payload = Payload::list('inboxes');

    $response = new Response(200, [], 'err');

    $this->client
        ->shouldReceive('sendRequest')
        ->once()
        ->andReturn($response);

    $this->http->requestObject($payload);
})->throws(UnserializableResponseException::class, 'Syntax error');

test('request content', function () {
    $payload = Payload::list('inboxes');

    $response = new Response(200, [], json_encode(inboxes()['list']));

    $this->client
        ->shouldReceive('sendRequest')
        ->once()
        ->withArgs(function (Psr7Request $request) {
            expect($request->getMethod())->toBe('GET')
                ->and($request->getUri())
                ->getHost()->toBe('domain.teamwork.com')
                ->getScheme()->toBe('https')
                ->getPath()->toBe('/desk/api/v2/inboxes.json');

            return true;
        })->andReturn($response);

    $this->http->requestContent($payload);
});

test('request content response', function () {
    $payload = Payload::list('inboxes');

    $response = new Response(200, [], 'My response content');

    $this->client
        ->shouldReceive('sendRequest')
        ->once()
        ->andReturn($response);

    $response = $this->http->requestContent($payload);

    expect($response)->toBe('My response content');
});

test('request content client errors', function () {
    $payload = Payload::list('inboxes');

    $baseUri = BaseUri::from('domain.teamwork.com');
    $headers = Headers::withAuthorization(ApiToken::from('token'));

    $this->client
        ->shouldReceive('sendRequest')
        ->once()
        ->andThrow(new ConnectException('Could not resolve host.', $payload->toRequest($baseUri, $headers)));

    expect(fn() => $this->http->requestContent($payload))->toThrow(function (TransporterException $e) {
        expect($e->getMessage())->toBe('Could not resolve host.')
            ->and($e->getCode())->toBe(0)
            ->and($e->getPrevious())->toBeInstanceOf(ConnectException::class);
    });
});

test('request content server errors', function () {
    $payload = Payload::list('inboxes');

    $response = new Response(401, [], json_encode([
        'errors' => [
            'id'     => '4c871383-e8a6-4625-9327-ca08640c1537',
            'title'  => 'Failed To Validate Token',
            'code'   => 'G401',
            'detail' => 'failed to validate token',
        ],
    ]));

    $this->client
        ->shouldReceive('sendRequest')
        ->once()
        ->andReturn($response);

    expect(fn() => $this->http->requestContent($payload))
        ->toThrow(function (ErrorException $e) {
            expect($e->getMessage())
                ->toBe('Failed To Validate Token')
                ->and($e->getErrorId())
                ->toBe('4c871383-e8a6-4625-9327-ca08640c1537')
                ->and($e->getErrorTitle())
                ->toBe('Failed To Validate Token')
                ->and($e->getErrorCode())
                ->toBe('G401')
                ->and($e->getErrorDetail())
                ->toBe('failed to validate token');
        });
});