<?php

namespace App\Http\Middleware;

use App\Models\Treatment;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class TreatmentMiddleWare
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
        $staff_id = $request->route()->parameter('treatment.staff_id');
        $user_id = $request->route()->parameter('treatment.user_id');
        if((int)auth()->user()->id !== $user_id && (int)auth()->user()->id !== $staff_id) {
            abort(404);
        }
        return $next($request);
    }
}
