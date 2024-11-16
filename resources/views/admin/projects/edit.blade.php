@extends('layouts.admin')

@section('title', 'Edit Project')

@section('content')
    <div class="container px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Edit Project: {{ $project->title }}
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mt-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    @if ($project->image)
                        <div class="mt-2 mb-4">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                class="h-32 w-auto object-cover rounded-lg">
                        </div>
                    @endif
                    <input type="file" name="image" id="image"
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                    @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="technologies" class="block text-sm font-medium text-gray-700">Technologies</label>
                    <input type="text" name="technologies" id="technologies"
                        value="{{ old('technologies', $project->technologies) }}" placeholder="Laravel, Vue.js, MySQL, etc."
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    @error('technologies')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="github_link" class="block text-sm font-medium text-gray-700">GitHub Link</label>
                        <input type="url" name="github_link" id="github_link"
                            value="{{ old('github_link', $project->github_link) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @error('github_link')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="demo_link" class="block text-sm font-medium text-gray-700">Demo Link</label>
                        <input type="url" name="demo_link" id="demo_link"
                            value="{{ old('demo_link', $project->demo_link) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @error('demo_link')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-4">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category" id="category"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Select Category</option>
                        <option value="Web Development"
                            {{ old('category', $project->category) == 'Web Development' ? 'selected' : '' }}>
                            Web Development
                        </option>
                        <option value="Mobile Development"
                            {{ old('category', $project->category) == 'Mobile Development' ? 'selected' : '' }}>
                            Mobile Development
                        </option>
                        <option value="UI/UX Design"
                            {{ old('category', $project->category) == 'UI/UX Design' ? 'selected' : '' }}>
                            UI/UX Design
                        </option>
                    </select>
                    @error('category')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="is_featured" value="1"
                            {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">Featured Project</span>
                    </label>
                </div>

                <div class="flex justify-end mt-6 space-x-3">
                    <a href="{{ route('admin.projects.index') }}"
                        class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 transition-colors duration-200">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-5 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg hover:from-purple-600 hover:to-indigo-700 focus:ring-4 focus:ring-purple-300 transition-all duration-200 shadow-lg hover:shadow-xl">
                        {{ isset($skill) ? 'Update Skill' : 'Create Skill' }}
                        <span class="ml-2">→</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection