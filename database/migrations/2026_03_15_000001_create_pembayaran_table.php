<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendaftaran_id');
            $table->integer('jumlah_bayar');
            $table->unsignedBigInteger('metode_pembayaran_id')->nullable();
            $table->string('metode_pembayaran_custom')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->string('status_pembayaran', 30)->default('pending');
            $table->timestamps();

            $table->foreign('pendaftaran_id')->references('id')->on('pendaftaran_event')->onDelete('cascade');
            $table->foreign('metode_pembayaran_id')->references('id')->on('metode_pembayaran')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
