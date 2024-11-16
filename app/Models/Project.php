<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'technologies',
        'github_link',
        'demo_link',
        'is_featured',
        'category',
        'category_ids'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_confidential' => 'boolean',
        'challenges' => 'array',
        'solutions' => 'array',
        'outcomes' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
