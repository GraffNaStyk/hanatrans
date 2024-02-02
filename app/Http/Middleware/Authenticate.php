<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle(Request $request, \Closure $next, ...$guards)
    {
        if (! Auth::user()) {
            if ($request->isXmlHttpRequest()) {
                return response()->json([], 401, ['Redirect' => route('login')]);
            }

            return redirect(route('login'));
        }

        return $next($request);
    }
}
