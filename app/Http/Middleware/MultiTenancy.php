<?php

namespace App\Http\Middleware;

use App\Ano;
use Closure;
use HipsterJazzbo\Landlord\Facades\Landlord;
use Illuminate\Support\Facades\Auth;

class MultiTenancy
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && isset(Auth::user()->ano_selecionado)) {
            $tenant = Ano::find(Auth::user()->ano_selecionado) ?? Ano::all()->first();
            Landlord::addTenant($tenant);
        }

        return $next($request);
    }
}