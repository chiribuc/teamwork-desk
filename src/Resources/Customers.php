<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Resources;

use Chiribuc\Teamwork\ValueObjects\Transporter\Payload;

final class Customers
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
     * @see https://apidocs.teamwork.com/docs/desk/d4f3b675d85b3-get-a-paginated-list-of-customers
     */
    public function list(array $parameters = []): array
    {
        $payload = Payload::list(resource: 'customers', parameters: $parameters);

        return $this->transporter->requestObject(payload: $payload);
    }

    /**
     * Retrieves a resource by ID.
     *
     * @param int   $id         the id of the resource.
     * @param array $parameters (optional) filter, includes
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     * @see https://apidocs.teamwork.com/docs/desk/d667a6937d077-filtering-api-results
     */
    public function find(int $id, array $parameters = []): array
    {
        $payload = Payload::retrieve(resource: 'customers', id: $id, parameters: $parameters);

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
     * @see https://apidocs.teamwork.com/docs/desk/fe69a0fb1007a-create-a-new-customer
     *
     */
    public function create(array $parameters): array
    {
        $payload = Payload::create(resource: 'customers', parameters: $parameters);

        return $this->transporter->requestObject(payload: $payload);
    }

    /**
     * Update a resource.
     *
     * @param array $parameters (optional) filter, includes
     * @param int   $id the id of the resource
     *
     * @return array
     * @throws \Chiribuc\Teamwork\Exceptions\ErrorException
     * @throws \Chiribuc\Teamwork\Exceptions\TransporterException
     * @throws \Chiribuc\Teamwork\Exceptions\UnserializableResponseException
     * @see https://apidocs.teamwork.com/docs/desk/3442f2a79b0d2-update-a-customer
     */
    public function update(array $parameters, int $id): array
    {
        $payload = Payload::update(resource: 'customers', id: $id, parameters: $parameters);

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
        $payload = Payload::delete(resource: 'customers', id: $id);

        return $this->transporter->requestObject(payload: $payload);
    }
}