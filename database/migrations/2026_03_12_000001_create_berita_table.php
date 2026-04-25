<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->unsignedBigInteger('kategori_id');
            $table->string('sumber', 500);
            $table->text('ringkasan');
            $table->text('konten');
            $table->string('gambar', 255)->nullable();
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori_berita')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
