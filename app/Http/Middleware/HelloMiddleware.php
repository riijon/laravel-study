<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
            ['name' => 'taro', 'mail' => 'taro@gmail.com'],
            ['name' => 'yoshida', 'mail' => 'yoshida@gmail.com'],
            ['name' => 'ikko', 'mail' => 'ikko@gmail.com'],
        ];
        $request->merge(['data' => $data]);
        return $next($request);
    }
}
