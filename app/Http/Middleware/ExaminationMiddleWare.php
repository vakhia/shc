<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExaminationMiddleWare
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
        $staff_id = $request->route()->parameter('examination.staff_id');
        $user_id = $request->route()->parameter('examination.user_id');
        if((int)auth()->user()->id !== $user_id && (int)auth()->user()->id !== $staff_id) {
            abort(404);
        }
        return $next($request);
    }
}
