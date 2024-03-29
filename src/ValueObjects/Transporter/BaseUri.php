<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\ValueObjects\Transporter;

use Chiribuc\Teamwork\Contracts\Stringable;

/**
 * @internal
 */
final class BaseUri implements Stringable
{
    /**
     * Creates a new Base URI value object.
     */
    private function __construct(private readonly string $baseUri)
    {
        // ..
    }

    /**
     * Creates a new Base URI value object.
     */
    public static function from(string $baseUri): self
    {
        return new self($baseUri);
    }

    /**
     * @inheritDoc
     */
    public function toString(): string
    {
        return "https://{$this->baseUri}/";
    }
}