{{-- filepath: resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Admin Panel</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('backoffice.dashboard') }}" class="hover:underline">Dashboard</a></li>
                    <li><a href="{{ route('projects.index') }}" class="hover:underline">Projets</a></li>
                    <li><a href="{{ route('services.index') }}" class="hover:underline">Services</a></li>
                    <li><a href="{{ route('admin.settings') }}" class="hover:underline">Paramètres</a></li>
                    <li><a href="{{ route('backoffice.statistics') }}" class="hover:underline">Statistiques</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="hover:underline">Déconnexion</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4 text-center">
        &copy; {{ date('Y') }} - Admin Panel
    </footer>
</body>
</html>
