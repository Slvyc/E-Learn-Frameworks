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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('framework_id')
                ->constrained('frameworks')
                ->onDelete('cascade');
            $table->foreignId('chapter_id')
                ->constrained('chapters')
                ->onDelete('cascade');
            $table->string('title');
            $table->longText('content')->nullable();
            $table->longText('code_sample')->nullable();
            $table->integer('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
