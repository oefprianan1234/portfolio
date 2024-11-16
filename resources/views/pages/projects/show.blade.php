@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
        <!-- Hero Section -->
        <section class="relative pt-16 pb-32 overflow-hidden">
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
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
                <div class="text-center" data-aos="fade-up">
                    <!-- Back Button -->
                    <div class="mb-8">
                        <a href="{{ route('projects.index') }}"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium
                              bg-white/10 text-white backdrop-blur-sm border border-white/20
                              hover:bg-white/20 transition-all duration-300">
                            <i class="fas fa-arrow-left"></i>
                            Back to Projects
                        </a>
                    </div>

                    <!-- Project Title -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                        {{ $project->title }}
                    </h1>

                    <!-- Category -->
                    <div class="flex items-center justify-center gap-2 text-lg text-indigo-100/90 mb-8">
                        <i class="{{ is_object($project->category) ? $project->category->icon : 'fas fa-folder' }}"></i>
                        <span>{{ is_object($project->category) ? $project->category->name : $project->category }}</span>
                    </div>

                    <!-- Technologies -->
                    <div class="flex flex-wrap justify-center gap-3" data-aos="fade-up" data-aos-delay="100">
                        @foreach (explode(',', $project->technologies) as $tech)
                            <span
                                class="px-4 py-2 rounded-lg text-sm font-medium
                                   bg-white/10 text-white backdrop-blur-sm border border-white/20
                                   hover:bg-white/20 hover:scale-105 transition-all duration-300">
                                {{ trim($tech) }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 pb-24">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8" data-aos="fade-right">
                    <!-- Project Image -->
                    @if ($project->image)
                        <div class="rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                class="w-full h-auto object-cover">
                        </div>
                    @endif

                    <!-- Description -->
                    <div
                        class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 backdrop-blur-sm
                            transform transition-all duration-300 hover:shadow-xl">
                        <h2
                            class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-6">
                            Project Overview
                        </h2>
                        <div class="prose dark:prose-invert max-w-none">
                            {!! nl2br(e($project->description)) !!}
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8" data-aos="fade-left">
                    <!-- Project Links -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 backdrop-blur-sm">
                        <h3
                            class="text-lg font-semibold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-4">
                            Project Links
                        </h3>
                        <div class="space-y-4">
                            @if ($project->github_link)
                                <a href="{{ $project->github_link }}" target="_blank"
                                    class="group flex items-center gap-3 px-4 py-3 rounded-lg
                                      bg-gray-50 dark:bg-gray-700/50
                                      hover:bg-indigo-50 dark:hover:bg-indigo-900/30
                                      transition-all duration-300">
                                    <i
                                        class="fab fa-github text-xl text-gray-700 dark:text-gray-300
                                         group-hover:text-indigo-600 dark:group-hover:text-indigo-400"></i>
                                    <span
                                        class="text-gray-700 dark:text-gray-300
                                           group-hover:text-indigo-600 dark:group-hover:text-indigo-400">
                                        View Source Code
                                    </span>
                                </a>
                            @endif

                            @if ($project->demo_link)
                                <a href="{{ $project->demo_link }}" target="_blank"
                                    class="flex items-center gap-3 px-4 py-3 rounded-lg
                                      bg-gradient-to-r from-indigo-600 to-purple-600 text-white
                                      hover:from-indigo-700 hover:to-purple-700
                                      transition-all duration-300">
                                    <i class="fas fa-external-link-alt text-xl"></i>
                                    <span>View Live Demo</span>
                                </a>
                            @endif

                            <!-- Share Button -->
                            <button id="share-project"
                                class="w-full flex items-center justify-center gap-3 px-4 py-3 rounded-lg
                                       bg-gray-50 dark:bg-gray-700/50 text-gray-700 dark:text-gray-300
                                       hover:bg-indigo-50 dark:hover:bg-indigo-900/30
                                       hover:text-indigo-600 dark:hover:text-indigo-400
                                       transition-all duration-300">
                                <i class="fas fa-share-alt text-xl"></i>
                                <span>Share Project</span>
                            </button>
                        </div>
                    </div>

                    <!-- Technologies -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 backdrop-blur-sm">
                        <h3
                            class="text-lg font-semibold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-4">
                            Technologies Used
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach (explode(',', $project->technologies) as $tech)
                                <span
                                    class="px-3 py-1.5 text-sm font-medium rounded-lg
                                       bg-indigo-50 text-indigo-600
                                       dark:bg-indigo-900/30 dark:text-indigo-400
                                       transform hover:scale-105 transition-all duration-300">
                                    {{ trim($tech) }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Projects -->
            @if ($relatedProjects->count() > 0)
                <div class="mt-16">
                    <h2
                        class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-8">
                        Related Projects
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($relatedProjects as $related)
                            <a href="{{ route('projects.show', $related) }}" data-aos="fade-up"
                                data-aos-delay="{{ $loop->index * 100 }}"
                                class="group bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden
                                  hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                                <!-- Project Image -->
                                <div class="relative aspect-video overflow-hidden">
                                    @if ($related->image)
                                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}"
                                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                    @else
                                        <div
                                            class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-600
                                                flex items-center justify-center">
                                            <i class="fas fa-code text-4xl text-white/90"></i>
                                        </div>
                                    @endif

                                    <!-- Category Badge -->
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium
                                               bg-black/30 text-white backdrop-blur-sm border border-white/20">
                                            <i
                                                class="{{ is_object($related->category) ? $related->category->icon : 'fas fa-folder' }}"></i>
                                            <span>{{ is_object($related->category) ? $related->category->name : $related->category }}</span>
                                        </span>
                                    </div>
                                </div>

                                <!-- Project Info -->
                                <div class="p-6">
                                    <h3
                                        class="text-lg font-semibold text-gray-900 dark:text-white
                                           group-hover:text-indigo-600 dark:group-hover:text-indigo-400
                                           transition-colors">
                                        {{ $related->title }}
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                        {{ Str::limit($related->description, 100) }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('share-project').addEventListener('click', async function() {
                const title = @json($project->title);
                const text = `Check out this amazing project: ${title}`;
                const url = window.location.href;

                if (navigator.share) {
                    try {
                        await navigator.share({
                            title,
                            text,
                            url
                        });
                    } catch (error) {
                        console.log('Error sharing:', error);
                    }
                } else {
                    // Improved Clipboard Copy
                    navigator.clipboard.writeText(url).then(() => {
                        const button = this;
                        const originalContent = button.innerHTML;

                        button.innerHTML = `
                <i class="fas fa-check text-xl"></i>
                <span>Link Copied!</span>
            `;

                        setTimeout(() => {
                            button.innerHTML = originalContent;
                        }, 2000);
                    }).catch(err => {
                        console.error('Failed to copy:', err);
                    });
                }
            });
        </script>
    @endpush

@endsection
