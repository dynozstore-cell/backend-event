<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftaran_event', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_id');
            $table->integer('jumlah_tiket')->default(1);
            $table->decimal('total_harga', 15, 2)->default(0.00);
            $table->dateTime('tanggal_daftar')->useCurrent();
            $table->string('status_pendaftaran', 20)->default('pending');
            $table->json('custom_form_responses')->nullable();
            $table->string('sertifikat_url')->nullable()->comment('Path file PDF sertifikat yang sudah digenerate');
            $table->timestamps();

            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('event')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_event');
    }
};
