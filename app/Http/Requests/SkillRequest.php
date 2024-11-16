<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'icon' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ];
    }
}