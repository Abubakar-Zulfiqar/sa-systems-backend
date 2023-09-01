<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfTokenMissing
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if (!$user || empty($user->token)) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
