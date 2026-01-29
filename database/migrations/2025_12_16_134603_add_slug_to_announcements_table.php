<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('announcements', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('judul');
        });
        
        // Generate slug for existing data
        DB::statement("UPDATE announcements SET slug = LOWER(REPLACE(REPLACE(judul, ' ', '-'), '/', '-')) WHERE slug IS NULL");
        
        // Make slug unique after data is filled
        Schema::table('announcements', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announcements', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
