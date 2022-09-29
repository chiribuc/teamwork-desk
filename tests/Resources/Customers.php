<?php

test('list all customers', function () {
    $client = mockClient('GET', 'customers', [], customers()['list']);

    $result = $client->customers()->list();

    expect($result)->toBeArray()->toBe(customers()['list']);
});

test('find a customer by ID', function () {
    $client = mockClient('GET', 'customers/789456', [], customers()['find']);

    $result = $client->customers()->find(789456);

    expect($result)->toBeArray()->toBe(customers()['find']);
});

test('create a new customer', function () {
    $client = mockClient('POST', 'customers', [
        'customer' => [
            'address'          => 'Some address 22',
            'email'            => 'gigi@crobert.ro',
            'firstName'        => 'Gigi',
            'lastName'         => 'Box',
            'trusted'          => true,
            'verifiedEmail'    => true,
            'welcomeEmailSent' => true,
        ],
        'included' => [
            'contacts' => [
                [
                    'isMain' => true,
                    'value'  => 'gigi@crobert.ro',
                    'type'   => 'email',
                ],
            ],
        ],
    ], customers()['create']);

    $result = $client->customers()->create([
        'customer' => [
            'address'          => 'Some address 22',
            'email'            => 'gigi@crobert.ro',
            'firstName'        => 'Gigi',
            'lastName'         => 'Box',
            'trusted'          => true,
            'verifiedEmail'    => true,
            'welcomeEmailSent' => true,
        ],
        'included' => [
            'contacts' => [
                [
                    'isMain' => true,
                    'value'  => 'gigi@crobert.ro',
                    'type'   => 'email',
                ],
            ],
        ],
    ]);

    expect($result)->toBeArray()->toBe(customers()['create']);
});

test('update existing customer', function () {
    $client = mockClient('PATCH', 'customers/2545456', [
        'customer' => [
            'address'   => 'Other Address 22',
            'email'     => 'gigi@crobert.ro',
            'firstName' => 'Gabriel',
        ],
    ], customers()['update']);

    $result = $client->customers()->update([
        'customer' => [
            'address'   => 'Other Address 22',
            'email'     => 'gigi@crobert.ro',
            'firstName' => 'Gabriel',
        ],
    ], 2545456);

    expect($result)->toBeArray()->toBe(customers()['update']);
});

test('delete customer by ID', function () {
    $client = mockClient('DELETE', 'customers/123456', [], ['deleted' => true]);

    $result = $client->customers()->delete(123456);

    expect($result)->toBeArray()->toBe(['deleted' => true]);
});