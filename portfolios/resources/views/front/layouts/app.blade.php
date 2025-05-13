{{-- filepath: d:\mydigitalschool\B3\Cours\framework php\portfolio\resources\views\layouts\app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Space+Grotesk" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white font-sans">
    {{-- Header --}}
    @include('front.layouts.header')

    {{-- Contenu principal --}}
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('front.layouts.footer')

    {{-- Scripts --}}
</body>
</html>
