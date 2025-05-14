<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter un Projet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('projects.store') }}" method="POST">
                        @csrf
                        <input style="display:none" type="text" value="{{ $user['id']}}" name="user_id" id="user_id" class="form-input w-full" required>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium">Nom</label>
                            <input type="text" name="name" id="name" class="form-input w-full bg-gray-800" required>
                        </div>
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium">Titre</label>
                            <input type="text" name="title" id="title" class="form-input w-full bg-gray-800" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium">Description</label>
                            <textarea name="description" id="description" class="form-textarea w-full bg-gray-800" rows="4" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="tasks" class="block text-sm font-medium">Tâches</label>
                            <textarea name="tasks" id="tasks" class="form-textarea w-full bg-gray-800" rows="4" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="steps" class="block text-sm font-medium">Etapes</label>
                            <textarea name="steps" id="steps" class="form-textarea w-full bg-gray-800" rows="4" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="features" class="block text-sm font-medium">Fonctionnalités</label>
                            <textarea name="features" id="features" class="form-textarea w-full bg-gray-800" rows="4" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium">Image (URL)</label>
                            <input type="text" name="image" id="image" class="form-input w-full bg-gray-800">
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
