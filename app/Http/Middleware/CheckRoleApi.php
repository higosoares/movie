<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 10/03/2019
 * Time: 20:56
 */


namespace App\Http\Middleware;

use App\Enum\ExceptionEnum;
use App\Traits\RequestResponse;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CheckRoleApi
{
    use RequestResponse;
    /**
     * Checks if user has admin permission
     *
     * @param  Request $request
     * @param  Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        dd($request, Auth::user());
        if (Gate::check('isAdmin', Auth::user())) {
            return $next($request);
        }
        return response()->json($this->response(403, ExceptionEnum::response403), 403);
    }
}
