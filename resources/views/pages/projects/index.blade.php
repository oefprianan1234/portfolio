@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
        <!-- Hero Section -->
        <section class="relative pt-16 pb-32 overflow-hidden"> <!-- เปลี่ยน py-20 lg:py-32 เป็น pt-16 pb-32 -->
            <!-- Enhanced Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/90 via-purple-600/90 to-blue-600/90">
                <!-- Animated Background Elements -->
                <div
                    class="absolute -top-1/2 -right-1/2 w-96 h-96 bg-purple-500/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob">
                </div>
                <div
                    class="absolute -bottom-1/2 -left-1/2 w-96 h-96 bg-indigo-500/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000">
                </div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-500/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000">
                </div>

                <!-- Grid Pattern -->
                <div class="absolute inset-0 bg-grid-pattern opacity-[0.02]"></div>
            </div>

            <!-- Content -->
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20"> <!-- เพิ่ม pt-20 เพื่อเว้นระยะจาก navbar -->
                <div class="text-center" data-aos="fade-up">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                        My Projects
                    </h1>
                    <p class="text-xl text-indigo-100/90 max-w-2xl mx-auto">
                        Bringing innovative ideas to life through elegant code and thoughtful design
                    </p>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 pb-24">
            <!-- Filter Tabs -->
            <div class="mb-12" data-aos="fade-up">
                <div
                    class="inline-flex flex-wrap justify-center gap-3 p-4 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg rounded-2xl shadow-lg">
                    <button data-filter="all"
                        class="filter-btn active px-5 py-2.5 rounded-xl text-sm font-medium
                           bg-transparent text-gray-700 dark:text-gray-300
                           transition duration-200
                           hover:bg-indigo-50 dark:hover:bg-gray-700/50">
                        <i class="fas fa-th-large mr-2"></i>
                        All Projects
                    </button>
                    @foreach ($categories as $category)
                        <button data-filter="{{ $category->slug }}"
                            class="filter-btn px-5 py-2.5 rounded-xl text-sm font-medium
                               bg-transparent text-gray-700 dark:text-gray-300
                               transition duration-200
                               hover:bg-indigo-50 dark:hover:bg-gray-700/50">
                            <i class="{{ $category->icon ?? 'fas fa-folder' }} mr-2"></i>
                            {{ $category->name }}
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($projects as $project)
                    <div class="project-item transform transition-all duration-300"
                        data-category="{{ is_object($project->category) ? $project->category->slug : $project->category }}"
                        data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <article
                            class="group relative bg-white dark:bg-gray-800 rounded-2xl overflow-hidden
                                  shadow-lg hover:shadow-xl dark:shadow-gray-900/10
                                  transform transition-all duration-300 hover:-translate-y-2">
                            <!-- Project Image -->
                            <div class="relative aspect-video overflow-hidden">
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
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium
                                           bg-black/30 text-white backdrop-blur-sm border border-white/20">
                                        <i
                                            class="{{ is_object($project->category) ? $project->category->icon : 'fas fa-folder' }} mr-1"></i>
                                        {{ is_object($project->category) ? $project->category->name : $project->category }}
                                    </span>
                                </div>
                            </div>

                            <!-- Project Info -->
                            <div class="p-6">
                                <h3
                                    class="text-lg font-semibold text-gray-900 dark:text-white
                                     group-hover:text-indigo-600 dark:group-hover:text-indigo-400
                                     transition-colors duration-300">
                                    {{ $project->title }}
                                </h3>

                                <p class="mt-3 text-gray-600 dark:text-gray-400 text-sm line-clamp-2">
                                    {{ Str::limit($project->description, 100) }}
                                </p>

                                <!-- Technologies -->
                                <div class="mt-4 flex flex-wrap gap-2">
                                    @foreach (explode(',', $project->technologies) as $tech)
                                        <span
                                            class="px-2.5 py-1 text-xs font-medium rounded-md
                                               bg-indigo-50 text-indigo-600
                                               dark:bg-indigo-900/30 dark:text-indigo-400
                                               transition duration-200">
                                            {{ trim($tech) }}
                                        </span>
                                    @endforeach
                                </div>

                                <!-- Actions -->
                                <div class="mt-6 flex items-center justify-between">
                                    <div class="flex space-x-3">
                                        @if ($project->github_link)
                                            <a href="{{ $project->github_link }}" target="_blank"
                                                class="p-2 rounded-lg text-gray-500
                                                  hover:text-indigo-600 dark:hover:text-indigo-400
                                                  transition-colors">
                                                <i class="fab fa-github text-lg"></i>
                                            </a>
                                        @endif
                                        @if ($project->demo_link)
                                            <a href="{{ $project->demo_link }}" target="_blank"
                                                class="p-2 rounded-lg text-gray-500
                                                  hover:text-indigo-600 dark:hover:text-indigo-400
                                                  transition-colors">
                                                <i class="fas fa-external-link-alt text-lg"></i>
                                            </a>
                                        @endif
                                    </div>

                                    <a href="{{ route('projects.show', $project) }}"
                                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium
                                          text-indigo-600 dark:text-indigo-400
                                          hover:bg-indigo-50 dark:hover:bg-indigo-900/30
                                          transition duration-300">
                                        View Details
                                        <i class="fas fa-arrow-right text-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 rounded-full
                               bg-indigo-50 dark:bg-indigo-900/30 mb-6">
                            <i class="fas fa-folder-open text-3xl text-indigo-500"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white mb-2">No Projects Found</h3>
                        <p class="text-gray-500 dark:text-gray-400">Check back later for new projects</p>
                    </div>
                @endforelse
                <!-- No Projects Message -->
                <div class="col-span-full text-center py-20" style="display: none; transition: all 0.3s ease-in-out;">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 rounded-full
                 bg-indigo-50 dark:bg-indigo-900/30 mb-6
                 transform transition-all duration-300 hover:scale-110">
                        <i class="fas fa-folder-open text-3xl text-indigo-500"></i>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white mb-2">
                        No Projects Found
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        No projects found in this category
                    </p>
                </div>
            </div>
        </div>
    </div>
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

            .project-item {
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .filter-btn {
                position: relative;
                transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .filter-btn.active {
                background-color: rgb(238, 242, 255);
                color: rgb(79, 70, 229);
            }

            .dark .filter-btn.active {
                background-color: rgba(79, 70, 229, 0.1);
                color: rgb(129, 140, 248);
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterButtons = document.querySelectorAll('.filter-btn');
                const projectItems = document.querySelectorAll('.project-item');
                const noProjectsMessage = document.querySelector('.col-span-full');

                function updateButtonStyles(activeButton) {
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active');
                        btn.classList.remove('bg-indigo-50', 'text-indigo-600');
                        btn.classList.add('bg-transparent', 'text-gray-700', 'dark:text-gray-300');
                    });

                    activeButton.classList.add('active');
                    activeButton.classList.add('bg-indigo-50', 'text-indigo-600');
                    activeButton.classList.remove('bg-transparent');
                }

                function showNoProjectsMessage() {
                    if (!noProjectsMessage) return;

                    noProjectsMessage.style.display = 'block';
                    noProjectsMessage.style.opacity = '0';
                    noProjectsMessage.style.transform = 'translateY(20px)';

                    setTimeout(() => {
                        noProjectsMessage.style.opacity = '1';
                        noProjectsMessage.style.transform = 'translateY(0)';
                    }, 50);
                }

                function hideNoProjectsMessage() {
                    if (!noProjectsMessage) return;
                    noProjectsMessage.style.display = 'none';
                    noProjectsMessage.style.opacity = '0';
                    noProjectsMessage.style.transform = 'translateY(20px)';
                }

                function filterProjects(category) {
                    let visibleProjectsCount = 0;

                    projectItems.forEach(project => {
                        const projectCategory = project.dataset.category;
                        const shouldShow = category === 'all' || projectCategory === category;

                        if (shouldShow) {
                            visibleProjectsCount++;
                            project.style.display = 'block';
                            project.style.opacity = '0';
                            project.style.transform = 'translateY(20px) scale(0.95)';

                            setTimeout(() => {
                                project.style.opacity = '1';
                                project.style.transform = 'translateY(0) scale(1)';
                            }, 50);
                        } else {
                            project.style.opacity = '0';
                            project.style.transform = 'translateY(20px) scale(0.95)';

                            setTimeout(() => {
                                project.style.display = 'none';
                            }, 300);
                        }
                    });

                    // ตรวจสอบว่ามีโปรเจ็กต์ที่แสดงผลหรือไม่
                    if (visibleProjectsCount === 0) {
                        showNoProjectsMessage();
                    } else {
                        hideNoProjectsMessage();
                    }
                }

                filterButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const category = button.dataset.filter;
                        updateButtonStyles(button);
                        filterProjects(category);

                        // เพิ่ม animation ให้กับปุ่มที่ถูกคลิก
                        button.classList.add('scale-105');
                        setTimeout(() => {
                            button.classList.remove('scale-105');
                        }, 200);
                    });
                });

                // Set initial state
                const allButton = document.querySelector('[data-filter="all"]');
                if (allButton) {
                    updateButtonStyles(allButton);
                    filterProjects('all');
                }
            });
        </script>
    @endpush
