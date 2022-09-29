<?php

use Chiribuc\Teamwork\Client;
use Chiribuc\Teamwork\Contracts\Transporter;
use Chiribuc\Teamwork\ValueObjects\ApiToken;
use Chiribuc\Teamwork\ValueObjects\Transporter\BaseUri;
use Chiribuc\Teamwork\ValueObjects\Transporter\Headers;
use Chiribuc\Teamwork\ValueObjects\Transporter\Payload;

function mockClient(
    string $method,
    string $resource,
    array $params,
    array|string $response,
    $methodName = 'requestObject'
): Client
{
    $transporter = Mockery::mock(Transporter::class);

    $transporter
        ->shouldReceive($methodName)
        ->once()
        ->withArgs(function (Payload $payload) use ($method, $resource) {
            $baseUri = BaseUri::from('domain.teamwork.com/desk/api/v2');
            $headers = Headers::withAuthorization(ApiToken::from('random_string'));

            $request = $payload->toRequest($baseUri, $headers);

            return $request->getMethod() === $method
                && $request->getUri()->getPath() === "/desk/api/v2/$resource.json";
        })->andReturn($response);

    return new Client($transporter);
}

function mockContentClient(string $method, string $resource, array $params, string $response): Client
{
    return mockClient($method, $resource, $params, $response, 'requestContent');
}