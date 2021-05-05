<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class VerifyJWTToken
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $user = JWTAuth::toUser($request->input('token'));
        } catch (JWTException $e) {
            if ($e instanceof TokenExpiredException) {
                return response()->json(['token_expired'], $e->getStatusCode());
            } else if ($e instanceof TokenInvalidException) {
                return response()->json(['token_invalid'], $e->getStatusCode());
            } else {
                return response()->json(['error' => 'Token is required']);
            }
        }
        return $next($request);
    }
}
