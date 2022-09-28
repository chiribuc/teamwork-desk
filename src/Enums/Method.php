<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Enums;

/**
 * @internal
 */
enum Method: string
{
    case GET    = 'GET';
    case POST   = 'POST';
    case PUT    = 'PUT';
    case PATCH  = 'PATCH';
    case DELETE = 'DELETE';
}