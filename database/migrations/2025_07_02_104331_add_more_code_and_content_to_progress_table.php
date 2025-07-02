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
        Schema::table('sections', function (Blueprint $table) {
            $table->longText('content2')->nullable()->after('code_sample');
            $table->longText('code_sample2')->nullable();
            $table->longText('content3')->nullable();
            $table->longText('code_sample3')->nullable();
            $table->longText('content4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->dropColumn(['content2', 'code_sample2', 'content3', 'code_sample3', 'content4']);
        });
    }
};
