<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roemah Kuliner</title>
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])
</head>

<body id="top" class="antialiased flex flex-col min-h-screen">

    <nav class="navbar">
        <div class="navbar-inner">
            <a href="/" class="brand-pill flex items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" class="logo w-8 h-8">
                <span class="brand-text">Roemah Kuliner</span>
            </a>
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="/menus">Order</a>
            </div>
        </div>
    </nav>

<main class="flex-grow flex justify-center py-24">
        <div class="max-w-4xl w-full text-center">
            @yield('content')
        </div>
    </main>


    <footer class="bg-gray-900 text-white py-12 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} Restoran Lezat. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
