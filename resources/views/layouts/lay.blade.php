<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Include your stylesheets here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <!-- Your header content -->
    </header>

    <div class="container">
        <aside>
            @yield('sidebar')
        </aside>

        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        <!-- Your footer content -->
    </footer>

    <!-- Include your scripts here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
