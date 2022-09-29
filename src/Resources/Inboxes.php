<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Resources;

use Chiribuc\Teamwork\ValueObjects\Transporter\Payload;

final class Inboxes
{
    use Concerns\Transportable;

    /**
     * List all resources available.
     *
     * @param array $parameters (optional) filter, includes
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     */
    public function list(array $parameters = []): array
    {
        $payload = Payload::list(resource: 'inboxes', parameters: $parameters);

        return $this->transporter->requestObject(payload: $payload);
    }

    /**
     * Retrieves resource by ID.
     *
     * @param int   $id         the id of resource.
     * @param array $parameters (optional) filter, includes
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     */
    public function find(int $id, array $parameters = []): array
    {
        $payload = Payload::retrieve(resource: 'inboxes', id: $id, parameters: $parameters);

        return $this->transporter->requestObject(payload: $payload);
    }
}