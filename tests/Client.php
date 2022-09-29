<?php

use Chiribuc\Teamwork\Desk;
use Chiribuc\Teamwork\Resources\AuthenticatedUser;
use Chiribuc\Teamwork\Resources\Inboxes;

it('has authenticated user', function () {
    $openAI = Desk::client('token', 'domain');

    expect($openAI->me())->toBeInstanceOf(AuthenticatedUser::class);
});

it('has inboxes', function () {
    $openAI = Desk::client('token', 'domain');

    expect($openAI->inboxes())->toBeInstanceOf(Inboxes::class);
});