<?php

namespace App\Http\Middleware;

use Closure;

class isOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $what  What does the use own?
     * @return mixed
     */
    public function handle($request, Closure $next, $routeParam)
    {
        switch ($routeParam) {
            case 'post':
                $userId = $request->route('posts')->user_id;
                break;
        }

        if (\Auth::id() != $userId) {
            return redirect('/');
        }
        
        return $next($request);
    }
}
