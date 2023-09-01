<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class SanctumTokenMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->hasHeader('Authorization')) {
            $token = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $token);

            // Retrieve the authenticated user
            $user = auth()->user();

            // Check if the user and token match
            $user = User::find($request->userID);
            if (!$user->token === $token) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

//            $request->merge(['sanctum_token' => $token]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}
