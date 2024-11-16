<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: #c7c7c7;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        /* Dark mode scrollbar */
        .dark ::-webkit-scrollbar-track {
            background: #1f2937;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #4b5563;
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Progress Bar */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(to right, #4f46e5, #818cf8);
            transform-origin: 0%;
            z-index: 70;
        }

        /* Loading Animation */
        .loader {
            border: 2px solid #f3f3f3;
            border-top: 2px solid #4f46e5;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Mobile Menu Animation */
        .mobile-menu {
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        /* Navbar Animation */
        .navbar-fixed {
            @apply fixed top-0 left-0 right-0 z-50;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Back to Top Button */
        .back-to-top {
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease-in-out;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
    </style>

    @stack('styles')
</head>

<body class="font-sans antialiased min-h-screen bg-gray-50 dark:bg-gray-900 transition duration-300">
    <!-- Progress Bar -->
    <div class="progress-bar" style="transform: scaleX(0);"></div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 hidden"
        onclick="closeMobileMenu()">
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed top-0 left-0 bottom-0 w-64 bg-white dark:bg-gray-800 z-50 mobile-menu shadow-lg">
        <div class="p-4">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('home') }}"
                    class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                    Portfolio App
                </a>
                <button onclick="closeMobileMenu()"
                    class="p-2 text-gray-600 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-indigo-400">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <nav class="space-y-4">
                <a href="{{ route('home') }}"
                    class="block px-4 py-2 rounded-lg text-gray-600 hover:bg-indigo-50 hover:text-indigo-600
                          dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-indigo-400
                          {{ request()->routeIs('home') ? 'bg-indigo-50 text-indigo-600 dark:bg-gray-700 dark:text-indigo-400' : '' }}">
                    <i class="fas fa-home mr-2"></i>
                    Home
                </a>
                <a href="{{ route('projects.index') }}"
                    class="block px-4 py-2 rounded-lg text-gray-600 hover:bg-indigo-50 hover:text-indigo-600
                          dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-indigo-400
                          {{ request()->routeIs('projects.*') ? 'bg-indigo-50 text-indigo-600 dark:bg-gray-700 dark:text-indigo-400' : '' }}">
                    <i class="fas fa-code mr-2"></i>
                    Projects
                </a>
                <a href="{{ route('about') }}"
                    class="block px-4 py-2 rounded-lg text-gray-600 hover:bg-indigo-50 hover:text-indigo-600
                          dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-indigo-400
                          {{ request()->routeIs('about') ? 'bg-indigo-50 text-indigo-600 dark:bg-gray-700 dark:text-indigo-400' : '' }}">
                    <i class="fas fa-user mr-2"></i>
                    About
                </a>
                <a href="{{ route('contact') }}"
                    class="block px-4 py-2 rounded-lg text-gray-600 hover:bg-indigo-50 hover:text-indigo-600
                          dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-indigo-400
                          {{ request()->routeIs('contact') ? 'bg-indigo-50 text-indigo-600 dark:bg-gray-700 dark:text-indigo-400' : '' }}">
                    <i class="fas fa-envelope mr-2"></i>
                    Contact
                </a>
            </nav>

            <hr class="my-6 border-gray-200 dark:border-gray-700">

            <!-- Social Links -->
            <div class="flex justify-center space-x-4">
                <a href="#" target="_blank"
                    class="text-gray-600 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400">
                    <i class="fab fa-github text-xl"></i>
                </a>
                <a href="#" target="_blank"
                    class="text-gray-600 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400">
                    <i class="fab fa-linkedin text-xl"></i>
                </a>
                <a href="#" target="_blank"
                    class="text-gray-600 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav
        class="fixed top-0 left-0 right-0 z-50 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md border-b border-gray-200/50 dark:border-gray-700/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Left side -->
                <div class="flex items-center">
                    <!-- Mobile menu button -->
                    <button onclick="openMobileMenu()"
                        class="sm:hidden p-2 rounded-lg text-gray-600 hover:text-indigo-600
                                   dark:text-gray-300 dark:hover:text-indigo-400">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                    <!-- Logo -->
                    <a href="{{ route('home') }}"
                        class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600
                              hover:from-indigo-700 hover:to-purple-700 transition duration-300">
                        Portfolio App
                    </a>

                    <!-- Desktop Navigation -->
                    <div class="hidden sm:ml-10 sm:flex sm:space-x-8">
                        <a href="{{ route('home') }}"
                            class="h-16 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition duration-200
                                  {{ request()->routeIs('home')
                                      ? 'border-indigo-600 text-indigo-600 dark:border-indigo-400 dark:text-indigo-400'
                                      : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">
                            Home
                        </a>
                        <a href="{{ route('projects.index') }}"
                            class="h-16 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition duration-200
                                  {{ request()->routeIs('projects.*')
                                      ? 'border-indigo-600 text-indigo-600 dark:border-indigo-400 dark:text-indigo-400'
                                      : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">
                            Projects
                        </a>
                        <a href="{{ route('about') }}"
                            class="h-16 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition duration-200
                                  {{ request()->routeIs('about')
                                      ? 'border-indigo-600 text-indigo-600 dark:border-indigo-400 dark:text-indigo-400'
                                      : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">
                            About
                        </a>
                        <a href="{{ route('contact') }}"
                            class="h-16 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition duration-200
                                  {{ request()->routeIs('contact')
                                      ? 'border-indigo-600 text-indigo-600 dark:border-indigo-400 dark:text-indigo-400'
                                      : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400' }}">
                            Contact
                        </a>
                    </div>
                </div>

                <!-- Right side -->
                <div class="flex items-center space-x-4">
                    <!-- Theme Toggle -->
                    <button id="theme-toggle"
                        class="p-2 rounded-lg text-gray-600 hover:text-indigo-600
                                   dark:text-gray-300 dark:hover:text-indigo-400
                                   transition duration-200">
                        <i class="fas fa-moon text-xl dark:hidden"></i>
                        <i class="fas fa-sun text-xl hidden dark:inline"></i>
                    </button>

                    <!-- Contact Button -->
                    <a href="{{ route('contact') }}"
                        class="hidden sm:inline-flex items-center px-4 py-2 rounded-lg text-sm font-medium
                              bg-gradient-to-r from-indigo-600 to-purple-600 text-white
                              hover:from-indigo-700 hover:to-purple-700
                              transform hover:-translate-y-0.5
                              transition-all duration-200">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Back to Top Button -->
    <button id="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="back-to-top fixed bottom-8 right-8 p-2 rounded-full bg-indigo-600 text-white shadow-lg
                   hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                   transform hover:-translate-y-1 transition-all duration-200">
        <i class="fas fa-arrow-up text-lg"></i>
    </button>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- About Section -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold">About Me</h3>
                    <p class="text-gray-300">Full Stack Developer passionate about creating innovative solutions.</p>
                </div>

                <!-- Quick Links -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold">Quick Links</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('home') }}"
                                class="text-gray-300 hover:text-white hover:underline transition duration-200">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('projects.index') }}"
                                class="text-gray-300 hover:text-white hover:underline transition duration-200">
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="text-gray-300 hover:text-white hover:underline transition duration-200">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="text-gray-300 hover:text-white hover:underline transition duration-200">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Connect -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold">Connect</h3>
                    <div class="flex items-center space-x-4">
                        <a href="#" target="_blank"
                            class="text-gray-300 hover:text-white transition duration-200 transform hover:-translate-y-1">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="text-gray-300 hover:text-white transition duration-200 transform hover:-translate-y-1">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="text-gray-300 hover:text-white transition duration-200 transform hover:-translate-y-1">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="mt-8 pt-8 border-t border-gray-700">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <!-- Copyright -->
                    <div class="text-gray-300">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                    </div>

                    <!-- Additional Links -->
                    <div class="flex items-center space-x-4">
                        <a href="#"
                            class="text-gray-300 hover:text-white hover:underline transition duration-200">
                            Privacy Policy
                        </a>
                        <a href="#"
                            class="text-gray-300 hover:text-white hover:underline transition duration-200">
                            Terms of Service
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });

        // Mobile Menu Functions
        function openMobileMenu() {
            document.getElementById('mobile-menu').classList.add('open');
            document.getElementById('mobile-menu-overlay').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            document.getElementById('mobile-menu').classList.remove('open');
            document.getElementById('mobile-menu-overlay').classList.add('hidden');
            document.body.style.overflow = '';
        }

        // Scroll Progress Bar
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector('.progress-bar').style.transform = `scaleX(${scrolled / 100})`;
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });

        // Theme Toggle
        const themeToggle = document.getElementById('theme-toggle');
        if (themeToggle) {
            themeToggle.addEventListener('click', () => {
                document.documentElement.classList.toggle('dark');
                localStorage.setItem('theme',
                    document.documentElement.classList.contains('dark') ? 'dark' : 'light'
                );
            });
        }

        // Initialize theme on page load
        if (localStorage.theme === 'dark' ||
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @stack('scripts')
</body>

</html>
