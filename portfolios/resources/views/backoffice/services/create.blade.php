<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter un Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('services.store') }}" method="POST">
                        @csrf
                        <input style="display:none" type="text" value="{{ $user['id']}}" name="user_id" id="user_id" class="form-input w-full" required>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium">Nom</label>
                            <input type="text" name="name" id="name" class="form-input w-full bg-gray-800" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium">Description</label>
                            <textarea name="description" id="description" class="form-textarea w-full bg-gray-800" rows="4"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium">Prix</label>
                            <input type="number" name="price" id="price" class="form-input w-full bg-gray-800">
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
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
