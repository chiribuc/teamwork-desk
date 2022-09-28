<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\ValueObjects;

use Chiribuc\Teamwork\Contracts\Stringable;

/**
 * @internal
 */
final class ApiToken implements Stringable
{
    /**
     * Creates a new API token value object
     *
     * @param string $apiToken
     */
    private function __construct(public readonly string $apiToken) {}

    public static function from(string $apiToken): self
    {
        return new self($apiToken);
    }

    /**
     * @inheritDoc
     */
    public function toString(): string
    {
        return $this->apiToken;
    }
}