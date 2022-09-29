<?php

test('list all inboxes', function () {
    $client = mockClient('GET', 'inboxes', [], inboxes()['list']);

    $result = $client->inboxes()->list();

    expect($result)->toBeArray()->toBe(inboxes()['list']);
});

test('find inbox by ID', function () {
    $client = mockClient('GET', 'inboxes/123456', [], inboxes()['find']);

    $result = $client->inboxes()->find(123456);

    expect($result)->toBeArray()->toBe(inboxes()['find']);
});