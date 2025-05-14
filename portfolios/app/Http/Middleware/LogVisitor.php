<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\VisitorStatistic;

class LogVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Enregistrer la visite
        VisitorStatistic::create([
            'ip_address' => $request->ip(),
            'url' => $request->fullUrl(),
            'visited_at' => now(),
        ]);

        return $next($request);
    }
}
