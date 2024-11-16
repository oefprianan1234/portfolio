
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('type')->nullable()->after('title');
            $table->boolean('is_confidential')->default(false)->after('description');
            $table->string('client')->nullable();
            $table->string('duration')->nullable();
            $table->string('team_size')->nullable();
            $table->string('role')->nullable();
            $table->json('challenges')->nullable();
            $table->json('solutions')->nullable();
            $table->json('outcomes')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'type', 'is_confidential', 'client', 'duration',
                'team_size', 'role', 'challenges', 'solutions', 'outcomes'
            ]);
        });
    }
};
