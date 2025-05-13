{{-- filepath: d:\mydigitalschool\B3\Cours\framework php\portfolio\resources\views\layouts\admin.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    {{-- Header --}}
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Admin Panel</h1>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} - Admin Panel
        </div>
    </footer>
</body>
</html>
