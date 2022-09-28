<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Resources;

use Chiribuc\Teamwork\ValueObjects\Transporter\Payload;

final class Inboxes
{
    use Concerns\Transportable;

    /**
     * List all inboxes available.
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     */
    public function list(): array
    {
        $payload = Payload::list(resource: 'inboxes');

        return $this->transporter->requestObject(payload: $payload);
    }

    /**
     * Retrieves an inbox data by ID.
     *
     * @param string $id the id of the inbox to retrieve.
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     */
    public function find(string $id): array
    {
        $payload = Payload::retrieve(resource: 'inboxes', id: $id);

        return $this->transporter->requestObject(payload: $payload);
    }
}