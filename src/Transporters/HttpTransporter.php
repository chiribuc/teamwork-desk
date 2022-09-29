<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Transporters;

use Chiribuc\Teamwork\Contracts\Transporter;
use Chiribuc\Teamwork\Exceptions\ErrorException;
use Chiribuc\Teamwork\Exceptions\TransporterException;
use Chiribuc\Teamwork\Exceptions\UnserializableResponseException;
use Chiribuc\Teamwork\ValueObjects\Transporter\BaseUri;
use Chiribuc\Teamwork\ValueObjects\Transporter\Headers;
use Chiribuc\Teamwork\ValueObjects\Transporter\Payload;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;

final class HttpTransporter implements Transporter
{
    /**
     * Creates a new Http Transporter instance.
     */
    public function __construct(
        private readonly ClientInterface $client,
        private readonly BaseUri $baseUri,
        private readonly Headers $headers,
    )
    {
        // ..
    }

    /**
     * @inheritDoc
     */
    public function requestObject(Payload $payload): array
    {
        $request = $payload->toRequest($this->baseUri, $this->headers);

        try {
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new TransporterException($clientException);
        }

        if ($request->getMethod() === 'DELETE') {
            return ['deleted' => true];
        }

        $contents = $response->getBody()->getContents();

        try {
            $response = json_decode($contents, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $jsonException) {
            throw new UnserializableResponseException($jsonException);
        }

        if (isset($response['errors'])) {
            throw new ErrorException($response['errors']);
        }

        return $response;
    }

    /**
     * @inheritDoc
     */
    public function requestContent(Payload $payload): string
    {
        $request = $payload->toRequest($this->baseUri, $this->headers);

        try {
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new TransporterException($clientException);
        }

        $contents = $response->getBody()->getContents();

        try {
            $response = json_decode($contents, true, 512, JSON_THROW_ON_ERROR);

            if (isset($response['errors'])) {
                throw new ErrorException($response['errors']);
            }
        } catch (JsonException) {
            // ..
        }

        return $contents;
    }
}