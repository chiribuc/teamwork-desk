<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork;

use Chiribuc\Teamwork\Contracts\Transporter;
use Chiribuc\Teamwork\Resources\AuthenticatedUser;
use Chiribuc\Teamwork\Resources\Inboxes;

final class Client
{
    /**
     * Creates a Client instance with the given API token.
     */
    public function __construct(private readonly Transporter $transporter)
    {
        // ..
    }

    /**
     * Authenticated user info.
     *
     * @return \Chiribuc\Teamwork\Resources\AuthenticatedUser
     */
    public function me(): AuthenticatedUser
    {
        return new AuthenticatedUser(transporter: $this->transporter);
    }

    /**
     * Inboxes resources.
     *
     * @return \Chiribuc\Teamwork\Resources\Inboxes
     */
    public function inboxes(): Inboxes
    {
        return new Inboxes(transporter: $this->transporter);
    }
}