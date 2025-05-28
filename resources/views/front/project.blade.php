{{-- filepath: d:\mydigitalschool\B3\Cours\framework php\portfolio\resources\views\front\project.blade.php --}}
@extends('front.layouts.app')

@section('title', $project->name)

@section('content')
<div id="centre" class="p-6 bg-gray-800 rounded-lg">
    <h1 class="titre text-4xl font-bold text-center mb-6">{{ $project->title }}</h1>
    <p class="text-lg leading-relaxed mb-6">{!!$project->description!!}</p>

    @if($project->tasks)
    <div id="part1" class="mb-6">
        <h2 class="text-2xl font-semibold mb-4">Tâches :</h2>
        {!!$project->tasks!!}
    </div>
    @endif

    @if($project->steps)
    <div id="part2" class="mb-6">
        <h2 class="text-2xl font-semibold mb-4">Étapes :</h2>
        {!!$project->steps!!}
    </div>
    @endif

    @if($project->features)
    <div id="part3" class="mb-6">
        <h2 class="text-2xl font-semibold mb-4">Fonctionnalités :</h2>
        {!! $project->features !!}
    </div>
    @endif
</div>
@endsection
