<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('nama_event', 150);
            $table->string('event_type')->default('offline');
            $table->unsignedBigInteger('kategori_id');
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->string('lokasi')->nullable();
            $table->string('meeting_link')->nullable();
            $table->integer('harga')->nullable();
            $table->text('metode_pembayaran')->nullable();
            $table->text('detail_pembayaran')->nullable();
            $table->json('custom_form_schema')->nullable();
            $table->string('foto_event', 255);
            $table->string('sertifikat_template')->nullable()->comment('Path file gambar template sertifikat (PNG/JPG)');
            $table->json('sertifikat_config')->nullable()->comment('Konfigurasi posisi teks sertifikat (x, y, font_size, dll)');
            $table->timestamps();

            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
