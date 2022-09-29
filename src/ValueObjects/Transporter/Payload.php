<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\ValueObjects\Transporter;

use Chiribuc\Teamwork\Enums\ContentType;
use Chiribuc\Teamwork\Enums\Method;
use Chiribuc\Teamwork\ValueObjects\ResourceUri;
use GuzzleHttp\Psr7\Request as Psr7Request;

/**
 * @internal
 */
final class Payload
{
    /**
     * Creates a new Request value object.
     *
     * @param array<string, mixed> $parameters
     */
    private function __construct(
        private readonly ContentType $contentType,
        private readonly Method $method,
        private readonly ResourceUri $uri,
        private readonly array $parameters = [],
    )
    {
        // ..
    }

    /**
     * Creates a new Payload value object from the given parameters.
     */
    public static function list(string $resource, array $parameters = []): self
    {
        $contentType = ContentType::JSON;
        $method      = Method::GET;
        $query       = self::buildQuery($parameters);
        $uri         = ResourceUri::list($resource, $query);

        return new self($contentType, $method, $uri);
    }

    /**
     * Creates a new Payload value object from the given parameters.
     */
    public static function retrieve(string $resource, int $id, array $parameters = []): self
    {
        $contentType = ContentType::JSON;
        $method      = Method::GET;
        $query       = self::buildQuery($parameters);
        $uri         = ResourceUri::retrieve($resource, $id, $query);

        return new self($contentType, $method, $uri);
    }

    /**
     * Creates a new Payload value object from the given parameters.
     *
     * @param array<string, mixed> $parameters
     */
    public static function create(string $resource, array $parameters): self
    {
        $contentType = ContentType::JSON;
        $method      = Method::POST;
        $uri         = ResourceUri::create($resource);

        return new self($contentType, $method, $uri, $parameters);
    }

    /**
     * Creates a new Payload value object from the given parameters.
     *
     * @param array<string, mixed> $parameters
     */
    public static function update(string $resource, int $id, array $parameters): self
    {
        $contentType = ContentType::JSON;
        $method      = Method::PATCH;
        $uri         = ResourceUri::update($resource, $id);

        return new self($contentType, $method, $uri, $parameters);
    }

    /**
     * Creates a new Payload value object from the given parameters.
     *
     * @param array<string, mixed> $parameters
     */
    public static function upload(string $resource, array $parameters): self
    {
        $contentType = ContentType::MULTIPART;
        $method      = Method::POST;
        $uri         = ResourceUri::upload($resource);

        return new self($contentType, $method, $uri, $parameters);
    }

    /**
     * Creates a new Payload value object from the given parameters.
     */
    public static function delete(string $resource, int $id): self
    {
        $contentType = ContentType::JSON;
        $method      = Method::DELETE;
        $uri         = ResourceUri::delete($resource, $id);

        return new self($contentType, $method, $uri);
    }

    /**
     * Creates a new Psr 7 Request instance.
     */
    public function toRequest(BaseUri $baseUri, Headers $headers): Psr7Request
    {
        $body = null;
        $uri  = $baseUri->toString() . $this->uri->toString();

        $headers = $headers->withContentType($this->contentType);

        if ($this->method === Method::POST || $this->method === Method::PATCH) {
            $body = json_encode($this->parameters, JSON_THROW_ON_ERROR);
        }

        return new Psr7Request($this->method->value, $uri, $headers->toArray(), $body);
    }

    /**
     * Build query string.
     *
     * @param array $params
     *
     * @return string
     */
    private static function buildQuery(array $params): string
    {
        if (empty($params)) {
            return '';
        }

        foreach ($params as $param => $value) {
            $params[$param] = $param === 'filter' ? json_encode($value) : $value;
        }

        return '?' . http_build_query($params);
    }
}