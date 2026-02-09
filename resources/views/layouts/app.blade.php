<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mason Grandusky - Professional Web Designer and Developer with 20+ years of experience in web development and security engineering">
    <meta name="keywords" content="web design, web development, PHP, Laravel, WordPress, security engineering">
    <meta name="author" content="Mason Grandusky">
    <title>@yield('title', 'Mason Grandusky | Web Design and Development')</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    @stack('styles')
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <h1>Mason Grandusky</h1>
                </div>
                <ul class="nav-menu">
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Mason Grandusky. All rights reserved.</p>
            <p>Professional Web Design & Development Services</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
