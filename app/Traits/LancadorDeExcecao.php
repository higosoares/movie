<?php

namespace App\Traits;

use App\Events\ErroEvent;
use App\Exceptions\MovieException;

trait LancadorDeExcecao
{
    /**
     * Lanca excecao
     *
     * @param int $status
     * @param string $message
     * @param string $messageLog
     * @throws MovieException
     */
    public function excecao(string $message, string $messageLog, int $status=400)
    {
        event(new ErroEvent($status, $messageLog));
        throw new MovieException($message, $status);
    }
}
