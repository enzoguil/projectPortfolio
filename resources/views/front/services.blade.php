@extends('front.layouts.app')

@section('title', 'Mes services')

@section('content')
<div id="centre" class="p-6">
    <h1 class="titre text-4xl font-bold text-center mb-6">Mes services</h1>
    <div class="flex flex-wrap justify-center gap-4">
        @forelse ($services as $service)
            <div class="bg-gray-800 rounded-lg p-6 w-1/4 text-center shadow hover:shadow-lg transition">
                <h2 class="text-2xl font-bold text-white mb-2">{{ $service->name }}</h2>
                <p class="text-gray-300 mb-4">{!!$service->description!!}</p>
                @if(isset($service->price))
                    <div class="text-lg text-blue-400 font-semibold mb-2">
                        {{ number_format($service->price, 2, ',', ' ') }} €
                    </div>
                @endif
            </div>
        @empty
            <p class="text-gray-400 text-center w-full">Aucun service trouvé.</p>
        @endforelse
    </div>
</div>
@endsection
