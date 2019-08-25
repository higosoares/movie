<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 10/03/2019
 * Time: 20:56
 */


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CheckRole
{
    /**
     * Checks if user has admin permission
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Gate::check('isAdmin', Auth::user())) {
            return $next($request);
        }

        return redirect('/home')->with('error', 'Your are not allowed to this page.');
    }

}
