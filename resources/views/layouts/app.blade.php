<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tasks for Today') | Task Management</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('welcome') }}" class="brand">
                TASKFLOW<span>.</span>
            </a>

            <div class="nav-links">
                <a href="{{ route('welcome') }}"
                   class="{{ request()->routeIs('welcome') ? 'active' : '' }}">
                    Welcome
                </a>

                <a href="{{ route('tasks') }}"
                   class="{{ request()->routeIs('tasks') ? 'active' : '' }}">
                    Task List
                </a>

                <a href="{{ route('profile') }}"
                   class="{{ request()->routeIs('profile') ? 'active' : '' }}">
                    Profile
                </a>

                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
            </div>
        </div>
    </nav>

    <main class="main-container">
        @yield('content')
    </main>

    <footer class="footer">
        <p>Tasks for Today Management System &copy; {{ date('Y') }}</p>
    </footer>

</body>
</html>
