<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Auth level check
        switch(Auth::guard($guard)->check()){
            case 'user':
                return redirect()->route('user_dashboard');
            case 'superadmin':
                return redirect()->route('admin_dashboard');
            case 'admin':
                return redirect()->route('admin_dashboard');                
            case 'support':
                return redirect()->route('admin_dashboard'); 
            default:
             return $next($request);

        }
        return $next($request);
    }
}
