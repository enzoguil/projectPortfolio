<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestion des Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <a href="{{ route('services.create') }}" class="btn btn-primary mb-4">Ajouter un Service</a>
                    <form method="GET" action="" class="mb-6 flex justify-center">
                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Rechercher un service..."
                            class="form-input w-1/3 px-4 py-2 rounded-l bg-gray-700 text-white"
                        >
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-r hover:bg-blue-700">
                            Rechercher
                        </button>
                    </form>
                    <table class="table-auto w-full shadow-md rounded-lg">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nom</th>
                                <th class="px-4 py-2">Prix</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td class="border px-4 py-2">{{ $service->name }}</td>
                                <td class="border px-4 py-2">{{ $service->price }}€</td>
                                <td class="border px-4 py-2">{!!Str::limit($service->description, 50)!!}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
