<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Pastikan nama tabelnya 'rsvps'
        Schema::create('rsvps', function (Blueprint $table) {
            $table->id();
            // PENTING: Gunakan nama_rsvp agar sesuai dengan Controller & Model
            $table->string('name_rsvp');
            $table->string('status_rsvp');
            $table->integer('attendance_count')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rsvps');
    }
};
