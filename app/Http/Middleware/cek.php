<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cek
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
       $user = \App\Models\User::where('email', $request->email)->first();
        if ($user->status == 'user') {
            return redirect('user/');
        } elseif ($user->status == 'admin') {
            return redirect('admin/transaksi');
        }
        
        return $next($request);
    }
}