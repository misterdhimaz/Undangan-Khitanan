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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('music_path')->nullable();
            $table->string('gallery_1')->nullable();
            $table->string('gallery_2')->nullable();
            $table->string('gallery_3')->nullable();
            $table->string('gallery_4')->nullable(); // Opsional
            $table->string('gallery_5')->nullable(); // Opsional
            $table->string('gallery_6')->nullable(); // Opsional
            $table->timestamps();
        });
    }
};
