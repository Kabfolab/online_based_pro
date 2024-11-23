<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-lg font-bold">
                <a href="/" class="hover:text-gray-300">My Laravel App</a>
            </h1>
            <nav>
            
                <a href="/" class="px-4 hover:text-gray-300">Home</a>
                <a href="/about" class="px-4 hover:text-gray-300">About</a>
                <a href="/contact" class="px-4 hover:text-gray-300">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-8 px-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            &copy; <?php echo date("Y"); ?> My Laravel App. All rights reserved.
        </div>
    </footer>
</body>
</html>
