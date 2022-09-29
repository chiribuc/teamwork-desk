<?php

use Chiribuc\Teamwork\Client;
use Chiribuc\Teamwork\Desk;

it('creates a client', function () {
    $openAI = Desk::client('random_string', 'domain');

    expect($openAI)->toBeInstanceOf(Client::class);
});
