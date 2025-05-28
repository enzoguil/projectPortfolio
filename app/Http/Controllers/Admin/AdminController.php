<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisitorStatistic;
use App\Models\Setting;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function settings()
    {
        $settings = auth()->user()->settings()->get();
        return view('backoffice.settings.index', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $data = $request->except('_token');
        $userId = auth()->user()->id;

        foreach ($data as $key => $value) {
            Setting::updateOrCreate(
                ['user_id' => $userId, 'key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Paramètres mis à jour avec succès.');
    }

    public function statistics()
    {
        $user = auth()->user();

        $statisticsByDate = \App\Models\VisitorStatistic::where('user_id', $user->id)
            ->selectRaw('DATE(visited_at) as date, COUNT(*) as visits')
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->get();

        $statistics = \App\Models\VisitorStatistic::where('user_id', $user->id)
            ->selectRaw('DATE(visited_at) as date, COUNT(*) as visits')
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->get();

        $uniqueVisitors = $statistics->unique('ip_address')->count();

        //Nombre de pages visitées par utilisateur
        $pagesVisited = \App\Models\VisitorStatistic::where('user_id', $user->id)
            ->selectRaw('COUNT(DISTINCT url) as pages_visited, ip_address')
            ->groupBy('ip_address')
            ->get();

        //Moyenne de pages visitées par utilisateur


        return view('backoffice.statistics', compact('statisticsByDate', 'uniqueVisitors', 'pagesVisited'));
    }

    public function dashboard()
    {
        $totalVisitors = VisitorStatistic::count();
        $totalProjects = Project::count();
        $totalServices = Service::count();

        return view('dashboard', compact('totalVisitors', 'totalProjects', 'totalServices'));
    }
}
