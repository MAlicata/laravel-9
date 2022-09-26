<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Iluminate\Http\Response;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $haveIdParamInGet = $request->input('id');
        if($haveIdParamInGet && $haveIdParamInGet == 123)
            return $next($request);
        return Response("No tienes permisos para hacer esta accion");
    }
}
