<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('technologies');
            $table->string('github_link')->nullable();
            $table->string('demo_link')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('category')->nullable(); // เพิ่ม column category เป็น string
            $table->foreignId('category_ids')->nullable()->constrained('categories');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};