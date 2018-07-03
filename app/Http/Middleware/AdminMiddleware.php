<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        //dd($request);
        //用dd函式檢查$request的內容
        //dd($request->user());
        //用dd函式檢查$request->user()的內容
        if (!$request->user()->hasAnyPermission('後台管理')) {
            abort(403);
        }
        return $next($request);
    }
}
