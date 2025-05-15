<?php
// filepath: app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use App\Http\Middleware\LogVisitor;
use Illuminate\Support\Facades\Http;
use App\Models\Project;
use App\Models\User;
use GPBMetadata\Google\Api\Log;

class HomeController extends Controller
{
    public function index($userId)
    {
        (new LogVisitor())->handle(request(), function ($request) {
            // You can add logic here if needed, or simply return $request
            return $request;
        });
        $user = User::findOrFail($userId);
        $projects = $user->projects()->orderBy('created_at', 'desc')->take(3)->get();
        $services = $user->services()->get();
        $settings = $user->settings;
        $x = $settings->where('key', 'x')->value('value');
        $instagram = $settings->where('key', 'instagram')->value('value');
        $youtube = $settings->where('key', 'youtube')->value('value');
        $discord = $settings->where('key', 'discord')->value('value');
        $github = $settings->where('key', 'github')->value('value');
        return view('front.home', compact('user', 'projects', 'x', 'instagram', 'youtube', 'discord', 'github'));
    }

    public function projects($userId)
    {
        (new LogVisitor())->handle(request(), function ($request) {
            // You can add logic here if needed, or simply return $request
            return $request;
        });
        $user = User::findOrFail($userId);
        $settings = $user->settings;
        $x = $settings->where('key', 'x')->value('value');
        $instagram = $settings->where('key', 'instagram')->value('value');
        $youtube = $settings->where('key', 'youtube')->value('value');
        $discord = $settings->where('key', 'discord')->value('value');
        $github = $settings->where('key', 'github')->value('value');
        // Appeler l'API pour récupérer tous les projets
        $query = $user->projects();

        if (request()->filled('search')) {
            $search = request('search');
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }

        $projects = $query->get();

        return view('front.projects', compact('user', 'projects', 'x', 'instagram', 'youtube', 'discord', 'github'));
    }

    public function show($userId, $id)
    {
        (new LogVisitor())->handle(request(), function ($request) {
            return $request;
        });
        $user = User::findOrFail($userId);
        $project = $user->projects()->findOrFail($id);
        $settings = $user->settings;
        $x = $settings->where('key', 'x')->value('value');
        $instagram = $settings->where('key', 'instagram')->value('value');
        $youtube = $settings->where('key', 'youtube')->value('value');
        $discord = $settings->where('key', 'discord')->value('value');
        $github = $settings->where('key', 'github')->value('value');

        return view('front.project', compact('user', 'project', 'x', 'instagram', 'youtube', 'discord', 'github'));
    }

    public function skills($userId)
    {
        (new LogVisitor())->handle(request(), function ($request) {
            return $request;
        });
        $user = User::findOrFail($userId);
        $settings = $user->settings;
        $x = $settings->where('key', 'x')->value('value');
        $instagram = $settings->where('key', 'instagram')->value('value');
        $youtube = $settings->where('key', 'youtube')->value('value');
        $discord = $settings->where('key', 'discord')->value('value');
        $github = $settings->where('key', 'github')->value('value');
        // Appeler l'API pour récupérer les compétences
        $skills = Http::get('https://api.example.com/skills')->json();

        return view('front.skills', compact('user', 'skills', 'x', 'instagram', 'youtube', 'discord', 'github'));
    }

    public function services($userId)
    {
        $user = User::findOrFail($userId);
        $settings = $user->settings;
        $x = $settings->where('key', 'x')->value('value');
        $instagram = $settings->where('key', 'instagram')->value('value');
        $youtube = $settings->where('key', 'youtube')->value('value');
        $discord = $settings->where('key', 'discord')->value('value');
        $github = $settings->where('key', 'github')->value('value');
        $services = $user->services()->get();
        return view('front.services', compact('user', 'services', 'x', 'instagram', 'youtube', 'discord', 'github'));
    }
}
