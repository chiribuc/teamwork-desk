<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Contracts;

use Chiribuc\Teamwork\Exceptions\ErrorException;
use Chiribuc\Teamwork\Exceptions\TransporterException;
use Chiribuc\Teamwork\Exceptions\UnserializableResponseException;
use Chiribuc\Teamwork\ValueObjects\Transporter\Payload;

/**
 * @internal
 */
interface Transporter
{
    /**
     * Sends a request to a server.
     **
     * @return array<array-key, mixed>
     *
     * @throws ErrorException|UnserializableResponseException|TransporterException
     */
    public function requestObject(Payload $payload): array;

    /**
     * Sends a content request to a server.
     *
     * @throws ErrorException|TransporterException
     */
    public function requestContent(Payload $payload): string;
}