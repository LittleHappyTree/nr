<?php

namespace App\Http\Middleware;

use Closure;
use App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $locales = ['id', 'en'];

    // ...
    public function handle($request, Closure $next, $locale)
    {
        if (array_search($locale, $this->locales) === false) {
            return redirect('/');
        }

        App::setLocale($locale);

        return $next($request);
    }
}
