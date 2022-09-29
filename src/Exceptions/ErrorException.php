<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork\Exceptions;

use Exception;

final class ErrorException extends Exception
{
    /**
     * Creates a new Exception instance.
     *
     * @param array{id: string, title: string, code: string, detail: string} $contents
     */
    public function __construct(private readonly array $contents)
    {
        parent::__construct($contents['title']);
    }

    /**
     * Returns the error message.
     */
    public function getErrorMessage(): string
    {
        return $this->getMessage();
    }

    /**
     * Returns the error ID.
     */
    public function getErrorId(): string
    {
        return $this->contents['id'];
    }

    /**
     * Returns the error title.
     */
    public function getErrorTitle(): string
    {
        return $this->contents['title'];
    }

    /**
     * Returns the error type.
     */
    public function getErrorCode(): string
    {
        return $this->contents['code'];
    }

    /**
     * Returns the error detail.
     */
    public function getErrorDetail(): string
    {
        return $this->contents['detail'];
    }
}