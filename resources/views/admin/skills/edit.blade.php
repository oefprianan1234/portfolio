@extends('layouts.admin')

@section('title', 'Edit Skill')

@section('content')
    <div class="container px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Edit Skill: {{ $skill->name }}
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('admin.skills.update', $skill) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mt-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $skill->name) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="percentage" class="block text-sm font-medium text-gray-700">Percentage</label>
                    <input type="number" name="percentage" id="percentage"
                        value="{{ old('percentage', $skill->percentage) }}" min="0" max="100"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    @error('percentage')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="icon" class="block text-sm font-medium text-gray-700">
                        Icon (Font Awesome Class)
                    </label>
                    <div class="flex items-center space-x-2">
                        <input type="text" name="icon" id="icon" value="{{ old('icon', $skill->icon) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <div class="mt-1">
                            <i class="{{ $skill->icon }} text-2xl"></i>
                        </div>
                    </div>
                    <p class="mt-1 text-sm text-gray-500">
                        Example: fab fa-laravel, fas fa-code
                    </p>
                    @error('icon')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end mt-6 space-x-3">
                    <a href="{{ route('admin.skills.index') }}"
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
