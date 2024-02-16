<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminverified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the admin password is provided in the request
        if ($request->get('isAdmin')) {
            // Proceed with the request
            return $next($request);
        } else {
            // Redirect back with an error message
            return redirect('/')->with('error', 'Unauthorized access.');
        }
    
    }
}
