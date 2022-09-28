<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Resources\Concerns;

use Chiribuc\Teamwork\Contracts\Transporter;

trait Transportable
{
    /**
     * Creates a Client instance with the given API token.
     */
    public function __construct(private readonly Transporter $transporter) {}
}