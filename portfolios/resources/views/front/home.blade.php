{{-- filepath: d:\mydigitalschool\B3\Cours\framework php\portfolio\resources\views\front\home.blade.php --}}
@extends('front.layouts.app')

@section('title', 'Accueil - Enzo Guillemet')

@section('content')

<div id="centre" class="p-6 text-white bg-gray-900">
    <h1 class="titre text-center text-4xl font-bold mb-6">{{ $user['name'] }}</h1>
    <p class="text-lg leading-relaxed mb-6">
        {{ $user['description'] }}
    </p>
    <h3 class="text-2xl font-semibold mt-8 mb-4">Quelques projets</h3>
    <div id="last_projects" class="flex flex-wrap w-full">
        @foreach ($projects as $project)
            <a href="{{ url('/portfolio/'. $user['id'] .'/projects/' . $project['id']) }}" class="fiche_projet bg-white bg-center bg-cover rounded-lg p-4 w-1/4 m-2 text-center transition duration-1000" style="background-image: url('{{ asset($project['image']) }}'); background-size: cover;">
                <div class="txt bg-gray-900 bg-opacity-75 rounded-lg p-5">
                    <h4 class="text-xl font-bold">{{ $project['title'] }}</h4>
                    <p class="text-sm">
                        {{ $project['description'] }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
