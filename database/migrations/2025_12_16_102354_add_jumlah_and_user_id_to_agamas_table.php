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
        Schema::table('agamas', function (Blueprint $table) {
            $table->integer('jumlah')->default(0)->after('agama');
            $table->foreignId('user_id')->nullable()->after('jumlah')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agamas', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn(['jumlah', 'user_id']);
        });
    }
};
