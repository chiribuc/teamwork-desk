<?php

test('has authenticated user info', function () {
    $client = mockClient('GET', 'me', [], me());

    $result = $client->me()->info();

    expect($result)->toBeArray()->toBe(me());
});