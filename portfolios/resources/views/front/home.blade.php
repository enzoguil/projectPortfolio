{{-- filepath: d:\mydigitalschool\B3\Cours\framework php\portfolio\resources\views\front\home.blade.php --}}
@extends('front.layouts.app')

@section('title', 'Accueil - Enzo Guillemet')

@section('content')

<div id="centre" class="p-6 text-white bg-gray-900">
    <h1 class="titre text-center text-4xl font-bold mb-6">Enzo Guillemet</h1>
    <p class="text-lg leading-relaxed mb-6">
        Actuellement étudiant à My Digital School en 3ème année, je développe beaucoup de projets de mon côté. Je me suis autoformé sur la plupart des langages que je maîtrise actuellement et je développe principalement en Java, HTML, CSS, JavaScript & PHP. Je suis passionné de développement depuis le collège. Je suis créatif et autonome et j'ai aussi plusieurs compétences en dehors du développement grâce à mes études et mes expériences personnelles (comme le design, la communication et le marketing) ce qui fait de moi une personne polyvalente.
    </p>
    <h3 class="text-2xl font-semibold mb-4">Études</h3>
    <div class="flex flex-wrap justify-center">
        <div class="bg-gray-800 rounded-lg p-4 w-1/4 m-2 text-center transition duration-1000">
            <h4 class="text-xl font-bold">Lycée Saint François Xavier (Vannes)</h4>
            <p class="text-sm">
                Année : 2019-2022<br>
                Diplôme : BAC Général option Math et NSI
            </p>
        </div>
        <div class="bg-gray-800 rounded-lg p-4 w-1/4 m-2 text-center transition duration-1000">
            <h4 class="text-xl font-bold">My Digital School Plescop</h4>
            <p class="text-sm">
                Année : 2022-2025<br>
                Diplôme : Bachelor Cycle Web
            </p>
        </div>
    </div>
    <h3 class="text-2xl font-semibold mt-8 mb-4">Quelques projets</h3>
    <div id="last_projects" class="flex flex-wrap w-full">
        @foreach ($projects as $project)
            <a href="{{ url('/projects/' . $project['id']) }}" class="fiche_projet bg-white bg-center bg-cover rounded-lg p-4 w-1/4 m-2 text-center transition duration-1000" style="background-image: url('{{ asset($project['image']) }}'); background-size: cover;">
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
