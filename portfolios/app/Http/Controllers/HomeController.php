<?php
// filepath: app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Project;
use App\Models\User;

class HomeController extends Controller
{
    public function index($userId)
    {
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
        $user = User::findOrFail($userId);
        $settings = $user->settings;
        $x = $settings->where('key', 'x')->value('value');
        $instagram = $settings->where('key', 'instagram')->value('value');
        $youtube = $settings->where('key', 'youtube')->value('value');
        $discord = $settings->where('key', 'discord')->value('value');
        $github = $settings->where('key', 'github')->value('value');
        // Appeler l'API pour récupérer tous les projets
        $projects = $user->projects()->get();

        return view('front.projects', compact('user', 'projects', 'x', 'instagram', 'youtube', 'discord', 'github'));
    }

    public function show($userId, $id)
    {
        // Appeler l'API pour récupérer un projet spécifique
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
}
