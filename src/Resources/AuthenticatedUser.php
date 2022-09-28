<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Resources;

use Chiribuc\Teamwork\ValueObjects\Transporter\Payload;

final class AuthenticatedUser
{
    use Concerns\Transportable;

    /**
     * Returns the current authenticated user data.
     *
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     */
    public function info(): array
    {
        $payload = Payload::list(resource: 'me');

        return $this->transporter->requestObject(payload: $payload);
    }
}