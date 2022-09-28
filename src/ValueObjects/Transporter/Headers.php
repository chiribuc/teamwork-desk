<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\ValueObjects\Transporter;

use Chiribuc\Teamwork\Enums\ContentType;
use Chiribuc\Teamwork\ValueObjects\ApiToken;

/**
 * @internal
 */
final class Headers
{
    /**
     * Creates a new Headers value object.
     *
     * @param array<string, string> $headers
     */
    private function __construct(private readonly array $headers)
    {
        // ..
    }

    /**
     * Creates a new Headers value object with the given API token.
     */
    public static function withAuthorization(ApiToken $apiToken): self
    {
        return new self([
            'Authorization' => "Bearer {$apiToken->toString()}",
        ]);
    }

    /**
     * Creates a new Headers value object, with the given content type, and the existing headers.
     */
    public function withContentType(ContentType $contentType): self
    {
        return new self([
            ...$this->headers,
            'Content-Type' => $contentType->value,
        ]);
    }

    /**
     * @return array<string, string> $headers
     */
    public function toArray(): array
    {
        return $this->headers;
    }
}