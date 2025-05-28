<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Statistiques des visiteurs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($statisticsByDate as $stat)
                        <div class="txt bg-gray-900 bg-opacity-75 rounded-lg p-5">
                            <h4 class="text-xl font-bold">Nombre de page visité le {{$stat['date']}}</h4>
                            <p class="text-sm">
                                {{$stat['visits']}}
                            </p>
                        </div>
                    @endforeach
                    <div class="txt bg-gray-900 bg-opacity-75 rounded-lg p-5">
                        <h4 class="text-xl font-bold">Visiteurs uniques</h4>
                        <p class="text-sm">
                            {{$uniqueVisitors}}
                        </p>
                    </div>
                    <div class="txt bg-gray-900 bg-opacity-75 rounded-lg p-5">
                        <h4 class="text-xl font-bold">Visiteurs uniques</h4>
                        <p class="text-sm">
                            {{$pagesVisited}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
