<?php

namespace App\Http\Middleware;

use App\Models\CustomersModel;
use Closure;
use Illuminate\Support\Facades\Auth;

class AuthBasic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::onceBasic())
        {
            return $next($request);
        }
    }
}
