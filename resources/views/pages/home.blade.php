@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <!-- Hero Section -->
    <section
        class="relative min-h-screen bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-indigo-900 overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <!-- Gradient Blobs -->
            <div
                class="absolute -top-48 -right-48 w-96 h-96 bg-indigo-400/30 dark:bg-indigo-600/20 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
            </div>
            <div
                class="absolute -bottom-48 -left-48 w-96 h-96 bg-purple-400/30 dark:bg-purple-600/20 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-pink-400/30 dark:bg-pink-600/20 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
            </div>

            <!-- Grid Pattern -->
            <div class="absolute inset-0 bg-grid-pattern opacity-[0.02] dark:opacity-[0.05]"></div>
        </div>

        <!-- Content -->
        <div class="relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-8" data-aos="fade-right">
                    <!-- Greeting -->
                    <div class="space-y-2">
                        <h2 class="text-2xl text-indigo-600 dark:text-indigo-400 font-medium">
                            Hello, I'm
                        </h2>
                        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold text-gray-900 dark:text-white">
                            Thannaphat
                            <span
                                class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400">
                                F Janla
                            </span>
                        </h1>
                    </div>

                    <!-- Roles - Animated -->
                    <div class="typing-container h-8">
                        <p class="text-xl sm:text-2xl text-gray-600 dark:text-gray-300" id="typed-text"></p>
                    </div>

                    <!-- Short Description -->
                    <p class="text-lg text-gray-600 dark:text-gray-400 max-w-xl leading-relaxed">
                        I craft elegant solutions through code, focusing on scalable and user-friendly applications that
                        make a difference.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="{{ route('projects.index') }}"
                            class="group relative inline-flex items-center overflow-hidden rounded-full bg-indigo-600 px-8 py-3 text-white focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                            <span class="absolute right-0 translate-x-full transition-transform group-hover:-translate-x-4">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                            <span class="text-sm font-medium transition-all group-hover:mr-4">
                                View Projects
                            </span>
                        </a>

                        <a href="{{ route('contact') }}"
                            class="group relative inline-flex items-center overflow-hidden rounded-full border-2 border-indigo-600 px-8 py-3 text-indigo-600 dark:text-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 hover:bg-indigo-600 hover:text-white transition-colors">
                            <span class="text-sm font-medium">
                                Get in Touch
                            </span>
                        </a>
                    </div>

                    <!-- Social Links -->
                    <div class="flex items-center gap-4 pt-4">
                        <a href="#" target="_blank"
                            class="text-gray-600 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400 transition-colors">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="text-gray-600 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400 transition-colors">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="text-gray-600 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400 transition-colors">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Hero Image/Avatar -->
                <div class="relative lg:block" data-aos="fade-left">
                    <div class="relative mx-auto w-full max-w-lg">
                        <div
                            class="relative aspect-square rounded-full bg-gradient-to-br from-indigo-500/5 to-purple-500/5 p-5">
                            <div
                                class="absolute inset-0 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 opacity-10 blur-2xl animate-pulse">
                            </div>
                            <!-- Profile Image -->
                            <div class="relative rounded-full overflow-hidden bg-white shadow-2xl">
                                @if (file_exists(public_path('storage/images/profile.jpg')))
                                    <img src="{{ asset('storage/images/profile.jpg') }}" alt="Profile"
                                        class="w-full h-full object-cover"
                                        onerror="this.onerror=null; this.src='{{ asset('images/default-avatar.svg') }}'">
                                @else
                                    <!-- Fallback SVG Avatar -->
                                    <div class="aspect-square bg-gradient-to-br from-indigo-500 to-purple-600">
                                        <svg class="w-full h-full text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 12a5 5 0 110-10 5 5 0 010 10zm0 2a10 10 0 00-8.5 4.5A10 10 0 0020.5 18.5 10 10 0 0012 14z" />
                                        </svg>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div
                            class="absolute -top-4 -right-4 w-72 h-72 bg-indigo-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob">
                        </div>
                        <div
                            class="absolute -bottom-8 -left-4 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000">
                        </div>
                        <div
                            class="absolute -bottom-4 right-8 w-72 h-72 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Projects Section -->
    <section
        class="relative py-24 bg-gradient-to-b from-white to-indigo-50/30 dark:from-gray-900 dark:to-gray-800 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-grid-pattern opacity-[0.02] dark:opacity-[0.05]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400">
                        Featured Projects
                    </span>
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">
                    Explore some of my recent work and creative solutions
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($featured_projects as $project)
                    <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div
                            class="relative bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                            <!-- Project Image -->
                            <div class="relative aspect-[16/9] overflow-hidden">
                                @if ($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                @else
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                                        <i class="fas fa-code text-4xl text-white/90"></i>
                                    </div>
                                @endif

                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="inline-flex items-center px-3 py-1.5 rounded-lg text-xs font-medium
                                       bg-black/30 text-white backdrop-blur-sm border border-white/20">
                                        <i
                                            class="{{ is_object($project->category) ? $project->category->icon : 'fas fa-folder' }} mr-2"></i>
                                        {{ is_object($project->category) ? $project->category->name : $project->category }}
                                    </span>
                                </div>
                            </div>

                            <!-- Project Info -->
                            <div class="p-6">
                                <h3
                                    class="text-xl font-semibold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                    {{ $project->title }}
                                </h3>
                                <p class="mt-3 text-gray-600 dark:text-gray-400 text-sm">
                                    {{ Str::limit($project->description, 120) }}
                                </p>

                                <!-- Technologies -->
                                <div class="mt-4 flex flex-wrap gap-2">
                                    @foreach (explode(',', $project->technologies) as $tech)
                                        <span
                                            class="px-2.5 py-1 text-xs font-medium rounded-md
                                           bg-indigo-50 text-indigo-600
                                           dark:bg-indigo-900/30 dark:text-indigo-400">
                                            {{ trim($tech) }}
                                        </span>
                                    @endforeach
                                </div>

                                <!-- Links -->
                                <div class="mt-6 flex items-center justify-between">
                                    <div class="flex space-x-3">
                                        @if ($project->github_link)
                                            <a href="{{ $project->github_link }}" target="_blank"
                                                class="p-2 rounded-lg text-gray-500 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400 transition-colors">
                                                <i class="fab fa-github text-lg"></i>
                                            </a>
                                        @endif
                                        @if ($project->demo_link)
                                            <a href="{{ $project->demo_link }}" target="_blank"
                                                class="p-2 rounded-lg text-gray-500 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400 transition-colors">
                                                <i class="fas fa-external-link-alt text-lg"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <a href="{{ route('projects.show', $project) }}"
                                        class="inline-flex items-center text-sm font-medium text-indigo-600 dark:text-indigo-400
                                      hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors">
                                        View Details
                                        <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Link -->
            <div class="text-center mt-12">
                <a href="{{ route('projects.index') }}"
                    class="inline-flex items-center px-6 py-3 rounded-full text-sm font-medium
                      bg-indigo-600 text-white
                      hover:bg-indigo-700 transition-colors">
                    View All Projects
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section
        class="relative py-24 bg-gradient-to-b from-indigo-50/30 to-white dark:from-gray-800 dark:to-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-grid-pattern opacity-[0.02] dark:opacity-[0.05]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400">
                        Skills & Technologies
                    </span>
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">
                    My technical expertise and the tools I work with
                </p>
            </div>

            <!-- Skills Grid -->
            <div class="grid gap-6 md:grid-cols-3 lg:grid-cols-4">
                @php
                    use App\Models\Skill;
                    $skills = Skill::orderBy('name')->get();
                @endphp
                @foreach ($skills as $skill)
                    <div class="group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                        <div
                            class="relative bg-white dark:bg-gray-800 rounded-xl p-6
                           shadow-lg hover:shadow-xl
                           transform transition duration-500
                           hover:-translate-y-2">
                            <!-- Icon -->
                            <div class="mb-4 text-center">
                                <i
                                    class="{{ $skill->icon }} text-5xl
                                  @if (Str::contains($skill->icon, 'php')) text-indigo-600
                                  @elseif(Str::contains($skill->icon, 'laravel')) text-red-600
                                  @elseif(Str::contains($skill->icon, 'js')) text-yellow-500
                                  @elseif(Str::contains($skill->icon, 'react')) text-blue-400
                                  @elseif(Str::contains($skill->icon, 'vue')) text-emerald-500
                                  @elseif(Str::contains($skill->icon, 'database')) text-blue-600
                                  @else text-indigo-600 @endif
                                  transition-transform duration-300 group-hover:scale-110">
                                </i>
                            </div>

                            <!-- Skill Info -->
                            <div class="text-center">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                    {{ $skill->name }}
                                </h3>

                                <!-- Progress Bar -->
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 mb-2">
                                    <div class="h-2.5 rounded-full transition-all duration-500
                                      @if (Str::contains($skill->icon, 'php')) bg-indigo-600
                                      @elseif(Str::contains($skill->icon, 'laravel')) bg-red-600
                                      @elseif(Str::contains($skill->icon, 'js')) bg-yellow-500
                                      @elseif(Str::contains($skill->icon, 'react')) bg-blue-400
                                      @elseif(Str::contains($skill->icon, 'vue')) bg-emerald-500
                                      @elseif(Str::contains($skill->icon, 'database')) bg-blue-600
                                      @else bg-indigo-600 @endif"
                                        style="width: {{ $skill->percentage }}%">
                                    </div>
                                </div>

                                <!-- Percentage -->
                                <span class="text-sm font-medium text-gray-600 dark:text-gray-400">
                                    {{ $skill->percentage }}%
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section
        class="relative py-24 bg-gradient-to-b from-white to-indigo-50/30 dark:from-gray-900 dark:to-gray-800 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-grid-pattern opacity-[0.02] dark:opacity-[0.05]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400">
                        Let's Connect
                    </span>
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">
                    Feel free to reach out for collaborations or just a friendly hello
                </p>
            </div>

            <!-- Contact Grid -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Email -->
                <a href="mailto:your.email@example.com"
                    class="group relative bg-white dark:bg-gray-800 rounded-xl p-6
                      shadow-lg hover:shadow-xl
                      transform transition duration-500
                      hover:-translate-y-2"
                    data-aos="fade-up">
                    <div class="text-center">
                        <i class="fas fa-envelope text-4xl text-indigo-600 dark:text-indigo-400 mb-4"></i>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Email</h3>
                        <p class="text-gray-600 dark:text-gray-400">your.email@example.com</p>
                    </div>
                </a>

                <!-- LinkedIn -->
                <a href="#" target="_blank"
                    class="group relative bg-white dark:bg-gray-800 rounded-xl p-6
                      shadow-lg hover:shadow-xl
                      transform transition duration-500
                      hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <i class="fab fa-linkedin text-4xl text-indigo-600 dark:text-indigo-400 mb-4"></i>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">LinkedIn</h3>
                        <p class="text-gray-600 dark:text-gray-400">Connect on LinkedIn</p>
                    </div>
                </a>

                <!-- GitHub -->
                <a href="#" target="_blank"
                    class="group relative bg-white dark:bg-gray-800 rounded-xl p-6
                      shadow-lg hover:shadow-xl
                      transform transition duration-500
                      hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center">
                        <i class="fab fa-github text-4xl text-indigo-600 dark:text-indigo-400 mb-4"></i>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">GitHub</h3>
                        <p class="text-gray-600 dark:text-gray-400">Check out my repos</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgb(99 102 241 / 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgb(99 102 241 / 0.1) 1px, transparent 1px);
            background-size: 4rem 4rem;
        }

        /* Typing Animation */
        .typing-container::after {
            content: '|';
            animation: cursor .8s infinite;
        }

        @keyframes cursor {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });

        // Typing Animation
        document.addEventListener('DOMContentLoaded', function() {
            const roles = [
                'Full Stack Developer',
                'UI/UX Designer',
                'Software Engineer',
                'Problem Solver'
            ];
            let currentRoleIndex = 0;
            let currentCharIndex = 0;
            let isDeleting = false;
            let typingSpeed = 100;
            const typedTextElement = document.getElementById('typed-text');

            function type() {
                const currentRole = roles[currentRoleIndex];

                if (isDeleting) {
                    // Deleting text
                    currentCharIndex--;
                    typingSpeed = 50;
                } else {
                    // Typing text
                    currentCharIndex++;
                    typingSpeed = 100;
                }

                // Update text
                typedTextElement.textContent = currentRole.substring(0, currentCharIndex);

                // Handle completing typing or deleting
                if (!isDeleting && currentCharIndex === currentRole.length) {
                    // Finished typing
                    isDeleting = true;
                    typingSpeed = 2000; // Pause before deleting
                } else if (isDeleting && currentCharIndex === 0) {
                    // Finished deleting
                    isDeleting = false;
                    currentRoleIndex = (currentRoleIndex + 1) % roles.length;
                }

                setTimeout(type, typingSpeed);
            }

            // Start typing animation
            if (typedTextElement) {
                type();
            }

            // Parallax Effect for Hero Section
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.parallax');

                parallaxElements.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    element.style.transform = `translateY(${scrolled * speed}px)`;
                });
            });

            // Smooth Scroll for Navigation Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    document.querySelector(targetId).scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });

            // Dark Mode Toggle (if you have it)
            const darkModeToggle = document.getElementById('dark-mode-toggle');
            if (darkModeToggle) {
                darkModeToggle.addEventListener('click', () => {
                    document.documentElement.classList.toggle('dark');

                    // Save preference
                    const isDark = document.documentElement.classList.contains('dark');
                    localStorage.setItem('darkMode', isDark);
                });
            }

            // Initialize Dark Mode based on saved preference
            if (localStorage.getItem('darkMode') === 'true' ||
                (!localStorage.getItem('darkMode') &&
                    window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            }

            // Intersection Observer for Animations
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.animate-on-scroll').forEach((element) => {
                observer.observe(element);
            });

            // Progress Bar Animation for Skills
            const skillBars = document.querySelectorAll('.skill-progress');
            skillBars.forEach(bar => {
                const percentage = bar.dataset.percentage;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = percentage + '%';
                }, 300);
            });

            // Custom Cursor Effect (Optional)
            const cursor = document.createElement('div');
            cursor.classList.add('custom-cursor');
            document.body.appendChild(cursor);

            document.addEventListener('mousemove', (e) => {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
            });

            // Enhanced Hover Effects
            document.querySelectorAll('.hover-effect').forEach(element => {
                element.addEventListener('mousemove', (e) => {
                    const rect = element.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    element.style.setProperty('--mouse-x', `${x}px`);
                    element.style.setProperty('--mouse-y', `${y}px`);
                });
            });
        });
    </script>
@endpush
