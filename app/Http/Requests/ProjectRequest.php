<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'technologies' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'github_link' => 'nullable|url|max:255',
            'demo_link' => 'nullable|url|max:255',
            'is_featured' => 'boolean',
            'category' => 'required|max:255',
        ];
    }
}