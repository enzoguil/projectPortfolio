{{-- filepath: d:\mydigitalschool\B3\Cours\framework php\portfolio\resources\views\front\skills.blade.php --}}
@extends('front.layouts.app')

@section('title', 'Compétences')

@section('content')
<div id="centre" class="p-6">
    <h1 class="titre text-4xl font-bold text-center mb-6">Langages</h1>
    <div id="last_projects" class="flex flex-wrap justify-center gap-4">
        @foreach ($skills as $skill)
            <a href="{{ route('skills.show', $skill->id) }}" class="fiche_projet bg-gray-800 rounded-lg p-4 w-1/4 text-center transition duration-500 hover:shadow-lg">
                <div class="txt">
                    <h4 class="text-xl font-bold text-white">{{ $skill->name }}</h4>
                    <img src="{{ asset($skill->image) }}" alt="{{ $skill->name }}" class="w-1/2 mx-auto">
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
