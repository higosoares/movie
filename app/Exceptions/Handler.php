<?php

namespace App\Exceptions;

use App\Enum\ExceptionEnum;
use App\Traits\RequestResponse;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class Handler extends ExceptionHandler
{
    use RequestResponse;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  Exception  $exception
     * @return void
     * @throws Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  Request  $request
     * @param  Exception  $exception
     * @return Response|JsonResponse|View
     */
    public function render($request, Exception $exception)
    {
        if ($request->wantsJson()) {
            return $this->apiException($exception);
        } else {
            if (config('debug')) {
                return parent::render($request, $exception);
            }
            return $this->webException($exception);
        }
    }

    /**
     * Render exception for api
     *
     * @param Exception $exception
     * @return View
     */
    private function webException(Exception $exception)
    {
        switch ($exception->getCode()) {
            case 400:
                return view(ExceptionEnum::view400);
                break;
            case 500:
                return view(ExceptionEnum::view500);
                break;
            default:
                return view(ExceptionEnum::view404);
                break;
        }
    }

    /**
     * Render exception for api
     *
     * @param Exception $exception
     * @return JsonResponse
     */
    private function apiException(Exception $exception)
    {
        switch ($exception->getCode()) {
            case 400:
                $status= 400;
                $message = ExceptionEnum::response400;
                break;
            case 500:
                $status = 500;
                $message = ExceptionEnum::response500;
                break;
            default:
                $status = 404;
                $message = ExceptionEnum::response404;
                break;
        }

        $return = $this->response($status, $message, $exception);
        return response()->json($return, $return['status']);
    }
}
