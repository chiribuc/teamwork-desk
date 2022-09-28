<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Enums;

/**
 * @internal
 */
enum ContentType: string
{
    case JSON      = 'application/json';
    case MULTIPART = 'multipart/form-data';
}