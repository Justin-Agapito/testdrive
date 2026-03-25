<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'MyBrand' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; }
        h1, h2, h3, .brand { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-stone-50 text-stone-800">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 w-full z-50 bg-stone-50/80 backdrop-blur-md border-b border-stone-200">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="brand text-2xl font-bold tracking-tight text-stone-900">MyBrand</a>
            <ul class="flex items-center gap-8 text-sm font-medium text-stone-600">
                <li><a href="{{ route('home') }}" class="hover:text-stone-900 transition-colors {{ request()->routeIs('home') ? 'text-stone-900 border-b-2 border-amber-400 pb-0.5' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-stone-900 transition-colors {{ request()->routeIs('about') ? 'text-stone-900 border-b-2 border-amber-400 pb-0.5' : '' }}">About</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-stone-900 transition-colors {{ request()->routeIs('contact') ? 'text-stone-900 border-b-2 border-amber-400 pb-0.5' : '' }}">Contact</a></li>
                <li><a href="{{ route('contact') }}" class="bg-stone-900 text-white px-5 py-2 rounded-full text-sm hover:bg-amber-500 transition-colors">Get in touch</a></li>
            </ul>
        </div>
    </nav>

    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-stone-900 text-stone-400 py-12 mt-20">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <span class="brand text-white text-xl">MyBrand</span>
            <p class="text-sm">© {{ date('Y') }} MyBrand. All rights reserved.</p>
            <ul class="flex gap-6 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">About</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>
