<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\VisitorStatistic;
use Illuminate\Support\Facades\Log;

class LogVisitor
{
    public function handle(Request $request, Closure $next)
    {

        $userId = $request->route('userId');

        // Enregistrer la visite
        VisitorStatistic::create([
            'user_id' => $userId,
            'ip_address' => $request->ip(),
            'url' => $request->fullUrl(),
            'visited_at' => now(),
        ]);

        return $next($request);
    }
}
