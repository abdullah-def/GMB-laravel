<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class HasRoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
 
        if ( $request->user()->role == User::ROLE_ADMIN || $request->user()->role == User::ROLE_EDITOR || $request->user()->role == User::ROLE_SUPPORT) {

            return $next($request);
        }
        return $next($request);
    }
}
