<?php

namespace App\Http\Middleware;

use Closure;

class ApiKeyCP
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->has("api_key_cp")) {
            return response()->json([
              'status' => 401,
              'message' => 'Acceso no autorizado',
            ], 401);
        }
      
        if ($request->has("api_key_cp")) {
            $api_key = "Key_codigo_postalDDfgQEQwNADy7676vrt##%@d@i2cASm@*%$*3&";
            if ($request->input("api_key_cp") != $api_key) {
                return response()->json([
                'status' => 401,
                'message' => 'Acceso no autorizado',
                ], 401);
            }
        }
        return $next($request);
    }
}
