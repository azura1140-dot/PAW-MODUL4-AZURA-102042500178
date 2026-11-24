<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('submissions')) {
            Schema::table('submissions', function (Blueprint $table) {
                $table->unsignedTinyInteger('nilai')->nullable();
                $table->text('catatan_dosen')->nullable();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('submissions')) {
            Schema::table('submissions', function (Blueprint $table) {
                $table->dropColumn(['nilai', 'catatan_dosen']);
            });
        }
    }
};