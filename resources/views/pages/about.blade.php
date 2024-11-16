@extends('layouts.app')

@section('title', 'About Me')

@section('content')
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
        <!-- Hero Section -->
        <section class="relative pt-20 pb-48 overflow-hidden">
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
            <div class="relative container mx-auto px-6 h-full">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-16">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 text-center lg:text-left" data-aos="fade-right">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-8">
                            About Me
                        </h1>
                        <p class="text-xl text-indigo-100/90 leading-relaxed">
                            Full Stack Developer passionate about creating elegant solutions through code and design. With
                            expertise in modern web technologies and a keen eye for detail.
                        </p>
                    </div>

                    <!-- Profile Image -->
                    <div class="w-full lg:w-1/2 flex justify-center lg:justify-end" data-aos="fade-left">
                        <div class="relative w-64 md:w-80 aspect-square">
                            <!-- Background Effects -->
                            <div
                                class="absolute inset-0 rounded-full bg-gradient-to-br from-indigo-500/10 to-purple-500/10">
                            </div>
                            <div
                                class="absolute inset-0 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 opacity-20 blur-2xl animate-pulse">
                            </div>

                            <!-- Profile Image Container -->
                            <div
                                class="absolute inset-4 rounded-full overflow-hidden bg-white shadow-2xl border-4 border-white/20">
                                <img src="{{ asset('images/profile.jpg') }}" alt="Profile"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='https://ui-avatars.com/api/?name=John+Doe&size=400&background=8B5CF6&color=fff'">
                            </div>

                            <!-- Decorative Blobs -->
                            <div
                                class="absolute -top-4 -right-4 w-32 h-32 bg-indigo-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                            </div>
                            <div
                                class="absolute -bottom-4 -left-4 w-32 h-32 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
                            </div>
                            <div
                                class="absolute -top-4 -left-4 w-32 h-32 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="relative -mt-24 pb-20">
            <div class="container mx-auto px-6">
                <!-- Content Sections Container -->
                <div class="grid gap-12">
                    <!-- Experience Section -->
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-3xl shadow-xl p-8"
                        data-aos="fade-up">
                        <h2
                            class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-8">
                            Professional Journey
                        </h2>
                        <div class="grid md:grid-cols-2 gap-8">
                            <!-- Experience Card -->
                            <div
                                class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg
                                   transform transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                                <div class="flex gap-6">
                                    <div
                                        class="flex-shrink-0 w-14 h-14 rounded-xl bg-indigo-100 dark:bg-indigo-900/30
                                            flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-briefcase text-2xl text-indigo-600 dark:text-indigo-400"></i>
                                    </div>
                                    <div>
                                        <h3
                                            class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400">
                                            Senior Developer
                                        </h3>
                                        <p class="text-indigo-600 dark:text-indigo-400 mt-1">2020 - Present</p>
                                        <p class="mt-4 text-gray-600 dark:text-gray-300 leading-relaxed">
                                            Led development of multiple web applications using modern technologies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more experience items as needed -->
                        </div>
                    </div>

                    <!-- Education Section -->
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-3xl shadow-xl p-8"
                        data-aos="fade-up">
                        <h2
                            class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-8">
                            Educational Background
                        </h2>
                        <div class="grid md:grid-cols-2 gap-8">
                            <!-- Education Card -->
                            <div
                                class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg
                                   transform transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                                <div class="flex gap-6">
                                    <div
                                        class="flex-shrink-0 w-14 h-14 rounded-xl bg-indigo-100 dark:bg-indigo-900/30
                                            flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-graduation-cap text-2xl text-indigo-600 dark:text-indigo-400"></i>
                                    </div>
                                    <div>
                                        <h3
                                            class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400">
                                            Bachelor of Computer Science
                                        </h3>
                                        <p class="text-indigo-600 dark:text-indigo-400 mt-1">2015 - 2019</p>
                                        <p class="mt-4 text-gray-600 dark:text-gray-300">
                                            University Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Skills Section -->
                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-3xl shadow-xl p-8"
                        data-aos="fade-up">
                        <h2
                            class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-8">
                            Skills & Technologies
                        </h2>
                        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                            @foreach ($skills as $skill)
                                <div
                                    class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg
                                      transform transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                                    <div class="text-center">
                                        <div class="mb-4 transform transition-transform duration-300 group-hover:scale-110">
                                            <i
                                                class="{{ $skill->icon }} text-4xl
                                                  @if (Str::contains($skill->icon, 'php')) text-indigo-600
                                                  @elseif(Str::contains($skill->icon, 'js')) text-yellow-500
                                                  @elseif(Str::contains($skill->icon, 'react')) text-cyan-400
                                                  @elseif(Str::contains($skill->icon, 'vue')) text-emerald-500
                                                  @else text-indigo-600 @endif
                                                  dark:text-opacity-90">
                                            </i>
                                        </div>
                                        <h3 class="text-base font-bold text-gray-900 dark:text-white mb-3">
                                            {{ $skill->name }}
                                        </h3>

                                        <!-- Progress Bar -->
                                        <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                            <div class="h-full rounded-full transition-all duration-500
                                                    @if (Str::contains($skill->icon, 'php')) bg-indigo-600
                                                    @elseif(Str::contains($skill->icon, 'js')) bg-yellow-500
                                                    @elseif(Str::contains($skill->icon, 'react')) bg-cyan-400
                                                    @elseif(Str::contains($skill->icon, 'vue')) bg-emerald-500
                                                    @else bg-indigo-600 @endif"
                                                style="width: {{ $skill->percentage }}%">
                                            </div>
                                        </div>
                                        <span
                                            class="text-xs font-medium text-gray-600 dark:text-gray-400 mt-2 inline-block">
                                            {{ $skill->percentage }}%
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
