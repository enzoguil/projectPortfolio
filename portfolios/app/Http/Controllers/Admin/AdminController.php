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

        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Paramètres mis à jour avec succès.');
    }

    public function statistics()
    {
        $user = auth()->user();

        // On suppose que la table visitor_statistics a une colonne user_id
        $statistics = \App\Models\VisitorStatistic::where('user_id', $user->id)
            ->selectRaw('DATE(visited_at) as date, COUNT(*) as visits')
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->get();

        return view('backoffice.statistics', compact('statistics'));
    }

    public function dashboard()
    {
        $totalVisitors = VisitorStatistic::count();
        $totalProjects = Project::count();
        $totalServices = Service::count();

        return view('dashboard', compact('totalVisitors', 'totalProjects', 'totalServices'));
    }
}
