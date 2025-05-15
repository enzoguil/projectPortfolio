<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier un Projet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('backoffice.projects.update', $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium">Nom</label>
                            <input type="text" name="name" id="name" class="form-input w-full bg-gray-800" value="{{ $project->name }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium">Titre</label>
                            <input type="text" name="title" id="title" class="form-input w-full bg-gray-800" value="{{ $project->title }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium">Description</label>
                            <textarea name="description" id="description" class="form-textarea w-full bg-gray-800" rows="4">{{ $project->description }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="tasks" class="block text-sm font-medium">Tâches</label>
                            <textarea name="tasks" id="tasks" class="form-textarea w-full bg-gray-800" rows="4">{{ $project->tasks }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="steps" class="block text-sm font-medium">Etapes</label>
                            <textarea name="steps" id="steps" class="form-textarea w-full bg-gray-800" rows="4">{{ $project->steps }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="features" class="block text-sm font-medium">Fonctionnalités</label>
                            <textarea name="features" id="features" class="form-textarea w-full bg-gray-800" rows="4">{{ $project->features }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium">Image (URL)</label>
                            <input type="text" name="image" id="image" class="form-input w-full bg-gray-800" value="{{ $project->image }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/2s85t90wlwd4owf99nbsjs3is1m0qt6ei3rxa4fs6g2wm286/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: 'textarea',
        menubar: false,
        skin: 'fabric',
        plugins: 'lists',
        toolbar: [
            'undo redo | styles | bold italic | link image alignleft aligncenter alignright numlist bullist',
        ]
    });
    </script>
</x-app-layout>
