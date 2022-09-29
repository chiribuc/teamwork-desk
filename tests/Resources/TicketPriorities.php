<?php

test('list all ticket priorities', function () {
    $client = mockClient('GET', 'ticketpriorities', [], ticketPriorities()['list']);

    $result = $client->ticketPriorities()->list();

    expect($result)->toBeArray()->toBe(ticketPriorities()['list']);
});

test('find a ticket priority by ID', function () {
    $client = mockClient('GET', 'ticketpriorities/789456', [], ticketPriorities()['find']);

    $result = $client->ticketPriorities()->find(789456);

    expect($result)->toBeArray()->toBe(ticketPriorities()['find']);
});

test('create a new ticket priority', function () {
    $client = mockClient('POST', 'ticketpriorities', [
        'color' => '#FFF000',
        'icon'  => 'priority-high',
        'name'  => 'urgent',
        'state' => 'active',
    ], ticketPriorities()['create']);

    $result = $client->ticketPriorities()->create([
        'color' => '#FFF000',
        'icon'  => 'priority-high',
        'name'  => 'urgent',
        'state' => 'active',
    ]);

    expect($result)->toBeArray()->toBe(ticketPriorities()['create']);
});

test('update existing ticket priority', function () {
    $client = mockClient('PATCH', 'ticketpriorities/2545456', [
        'color' => '#FFFDDD',
        'name'  => 'lowest',
    ], ticketPriorities()['update']);

    $result = $client->ticketPriorities()->update([
        'color' => '#FFFDDD',
        'name'  => 'lowest',
    ], 2545456);

    expect($result)->toBeArray()->toBe(ticketPriorities()['update']);
});

test('delete ticket priority by ID', function () {
    $client = mockClient('DELETE', 'ticketpriorities/123456', [], ['deleted' => true]);

    $result = $client->ticketPriorities()->delete(123456);

    expect($result)->toBeArray()->toBe(['deleted' => true]);
});