<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function redirectTo($request): ?string
    {
        if ($request->route()->getPrefix() != 'api/patient') {
            return route('login');
        }
        if ($request->route()->getPrefix() != 'api/driver') {
            return route('login');
        }


        abort(response()->json(['message' => 'Unauthorized access'], 401));
    }
}
