{{-- filepath: d:\mydigitalschool\B3\Cours\framework php\portfolio\resources\views\front\projects.blade.php --}}
@extends('front.layouts.app')

@section('title', 'Mes projets')

@section('content')
<div id="centre" class="p-6">
    <h1 class="titre text-4xl font-bold text-center mb-6">Mes projets</h1>
    <form method="GET" action="" class="mb-6 flex justify-center">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Rechercher un projet..."
        class="form-input w-1/3 px-4 py-2 rounded-l bg-gray-700 text-white"
    >
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-r hover:bg-blue-700">
        Rechercher
    </button>
</form>
    <div id="last_projects" class="flex flex-wrap justify-center gap-4">
        @foreach ($projects as $project)
            <a href="{{ url('portfolio/'. $user['id'] .'/projects/'. $project->id) }}" class="fiche_projet bg-gray-800 rounded-lg p-4 w-1/4 text-center transition duration-500 hover:shadow-lg" style="background-image: url('{{ asset($project->image) }}'); background-size: cover; background-position: center;">
                <div class="txt bg-gray-900 bg-opacity-75 rounded-lg p-4">
                    <h4 class="text-xl font-bold text-white">{{ $project->title }}</h4>
                    <p class="text-sm text-gray-300">
                        {!!Str::limit($project->description, 150)!!}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
