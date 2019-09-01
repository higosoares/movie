<?php

namespace App\Traits;

use App\Events\ErroEvent;
use App\Exceptions\MovieException;
use Exception;

trait RequestResponse
{

    /**
     * @param $status
     * @param $message
     * @param $exception
     * @return array
     */
    public function response($status, $message, Exception $exception = null)
    {
        $return = [];

        if ($exception) {
            if (config('app.debug')) {
                $return['trace'] = $exception->getTrace();
                $return['message'] = $exception->getMessage();
                $return['code'] = $exception->getCode();
            }
        }

        $return['status'] = $status;
        $return['return'] = $message;

        return $return;
    }
}
