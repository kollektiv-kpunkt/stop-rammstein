<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     *
     * TODO: Add session support
     */
    public function handle(Request $request, Closure $next)
    {
        app()->setLocale("de");
        return $next($request);
        $available_locales = ["de", "fr"];

        if (array_key_exists($request->getHost(), $domains)) {
            app()->setLocale($domains[$request->getHost()]);
        } else {
        }
        session()->put("locale", app()->getLocale());
    }
}
