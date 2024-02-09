<?php

namespace App\Http\Middleware;

use App\Models\Controleur;
use App\Models\Methode;
use App\Models\Permission;
use Closure;

class PermissionAuth
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
        //auth
        if (auth()->guest()) {
            return redirect('/login');
        }
        return $next($request);



    }
}
