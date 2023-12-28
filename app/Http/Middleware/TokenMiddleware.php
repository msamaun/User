<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Helper\JWTHelper;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie('token');
        $result = JWTHelper::DecodeToken($token);
        if($result == "Unauthorized"){
            return redirect('/login');
        }
        else{
            $request->header->set('email', $result->email);
            $request->header->set('id', $result->useID);
            return $next($request);
        }

    }
}
