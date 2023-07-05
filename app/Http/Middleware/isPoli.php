<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isPoli
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ((!auth()->check()) || (auth()->user()->roles->name != 'Super Admin') && (auth()->user()->roles->name != 'Poli'  ) ){
            abort(403);
        }
        return $next($request);
    }
}
