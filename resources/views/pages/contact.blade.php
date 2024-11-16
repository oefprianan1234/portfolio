@extends('layouts.app')

@section('title', 'Contact Me')

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
            <div class="relative">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
                    <div class="text-center" data-aos="fade-up">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                            Get in Touch
                        </h1>
                        <p class="text-xl text-indigo-100/90 max-w-2xl mx-auto">
                            Let's discuss how we can work together to bring your ideas to life
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 pb-24">
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Contact Information -->
                <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-xl p-8 lg:p-10"
                    data-aos="fade-right">
                    <h2
                        class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-8">
                        Contact Information
                    </h2>

                    <div class="space-y-8">
                        <!-- Email -->
                        <div class="group flex items-center gap-6">
                            <div
                                class="flex-shrink-0 w-14 h-14 rounded-xl bg-indigo-100 dark:bg-indigo-900/30
                                    flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-envelope text-2xl text-indigo-600 dark:text-indigo-400"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Email Address</h3>
                                <p class="text-indigo-600 dark:text-indigo-400 mt-1">contact@example.com</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="group flex items-center gap-6">
                            <div
                                class="flex-shrink-0 w-14 h-14 rounded-xl bg-indigo-100 dark:bg-indigo-900/30
                                    flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-map-marker-alt text-2xl text-indigo-600 dark:text-indigo-400"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Location</h3>
                                <p class="text-indigo-600 dark:text-indigo-400 mt-1">Bangkok, Thailand</p>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="pt-8 border-t border-gray-200 dark:border-gray-700">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Connect With Me</h3>
                            <div class="flex gap-4">
                                <a href="#" target="_blank"
                                    class="group w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-900/30
                                      flex items-center justify-center
                                      hover:scale-110 transition-transform">
                                    <i
                                        class="fab fa-github text-xl text-indigo-600 dark:text-indigo-400
                                         group-hover:text-indigo-700 dark:group-hover:text-indigo-300
                                         transition-colors"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="group w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-900/30
                                      flex items-center justify-center
                                      hover:scale-110 transition-transform">
                                    <i
                                        class="fab fa-linkedin text-xl text-indigo-600 dark:text-indigo-400
                                         group-hover:text-indigo-700 dark:group-hover:text-indigo-300
                                         transition-colors"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="group w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-900/30
                                      flex items-center justify-center
                                      hover:scale-110 transition-transform">
                                    <i
                                        class="fab fa-twitter text-xl text-indigo-600 dark:text-indigo-400
                                         group-hover:text-indigo-700 dark:group-hover:text-indigo-300
                                         transition-colors"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-2xl shadow-xl p-8 lg:p-10"
                    data-aos="fade-left">
                    @if (session('success'))
                        <div class="mb-6 bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-600
                                text-green-700 dark:text-green-300 px-4 py-3 rounded-xl relative"
                            role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline ml-1">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf

                        @if (session('success'))
                            <div class="bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-600
                                        text-green-700 dark:text-green-300 px-4 py-3 rounded-lg relative"
                                role="alert">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="bg-red-100 dark:bg-red-900 border border-red-400 dark:border-red-600
                                        text-red-700 dark:text-red-300 px-4 py-3 rounded-lg relative"
                                role="alert">
                                <p>{{ session('error') }}</p>
                            </div>
                        @endif

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Full Name
                            </label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm
                                          focus:border-indigo-500 focus:ring-indigo-500
                                          dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Email Address
                            </label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm
                                          focus:border-indigo-500 focus:ring-indigo-500
                                          dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Subject
                            </label>
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm
                                          focus:border-indigo-500 focus:ring-indigo-500
                                          dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            @error('subject')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Message
                            </label>
                            <textarea name="message" id="message" rows="4"
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm
                                             focus:border-indigo-500 focus:ring-indigo-500
                                             dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full py-3 px-4 border border-transparent rounded-xl
                                       text-sm font-medium text-white
                                       bg-gradient-to-r from-indigo-600 to-purple-600
                                       hover:from-indigo-700 hover:to-purple-700
                                       focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
                                       transform hover:-translate-y-0.5
                                       transition-all duration-200
                                       flex items-center justify-center gap-2">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.querySelector('form').addEventListener('submit', function() {
                const button = this.querySelector('button[type="submit"]');
                button.disabled = true;
                button.innerHTML = `
        <div class="flex items-center gap-3">
            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span>Sending...</span>
        </div>
    `;
            });
        </script>
    @endpush
@endsection
