<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kontak_event', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('email', 100);
            $table->string('no_hp', 15);
            $table->string('judul_event', 150);
            $table->text('deskripsi_event');
            $table->text('pesan')->nullable();
            $table->text('balasan')->nullable();
            $table->timestamp('replied_at')->nullable();
            $table->string('status', 20)->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kontak_event');
    }
};
