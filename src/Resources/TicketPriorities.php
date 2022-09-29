<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Resources;

use Chiribuc\Teamwork\ValueObjects\Transporter\Payload;

final class TicketPriorities
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
     * @see https://apidocs.teamwork.com/docs/desk/86a38b267d984-get-a-paginated-list-of-ticketpriorities
     */
    public function list(array $parameters = []): array
    {
        $payload = Payload::list(resource: 'ticketpriorities', parameters: $parameters);

        return $this->transporter->requestObject(payload: $payload);
    }

    /**
     * Retrieves a resource by ID.
     *
     * @param int   $id         the id of the resource
     * @param array $parameters (optional) filter, includes
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     * @see https://apidocs.teamwork.com/docs/desk/8f1ce93c34541-get-a-single-ticketpriority-by-id
     */
    public function find(int $id, array $parameters = []): array
    {
        $payload = Payload::retrieve(resource: 'ticketpriorities', id: $id, parameters: $parameters);

        return $this->transporter->requestObject(payload: $payload);
    }

    /**
     * Create a new resource.
     *
     * @param array $parameters (optional) filter, includes
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     * @see https://apidocs.teamwork.com/docs/desk/8016b0ab06fb4-delete-a-ticketpriority
     *
     */
    public function create(array $parameters): array
    {
        $payload = Payload::create(resource: 'ticketpriorities', parameters: $parameters);

        return $this->transporter->requestObject(payload: $payload);
    }

    /**
     * Update a resource.
     *
     * @param array $parameters (optional) filter, includes
     * @param int   $id         the id of the resource
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     * @see https://apidocs.teamwork.com/docs/desk/2846d9b2ff181-update-a-ticket-ticketpriority
     */
    public function update(array $parameters, int $id): array
    {
        $payload = Payload::update(resource: 'ticketpriorities', id: $id, parameters: $parameters);

        return $this->transporter->requestObject(payload: $payload);
    }

    /**
     * Delete a resource.
     *
     * @param int $id the id of the resource to be deleted
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     * @see https://apidocs.teamwork.com/docs/desk/940a010e25d55-delete-a-customer
     *
     */
    public function delete(int $id): array
    {
        $payload = Payload::delete(resource: 'ticketpriorities', id: $id);

        return $this->transporter->requestObject(payload: $payload);
    }
}