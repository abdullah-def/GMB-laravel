<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class ApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->cookie('access_token') != null) {

            // setcookie('aaaaa', 'aaaaaaaa', $httponly = true);
            return $next($request);
        }
        $link = env('APP_URL') . '/create_access_token?nexturl=' . $request->url();


        return  redirect($link);
    }
}
