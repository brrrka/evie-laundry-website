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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->integer('no_pesanan')->primary();
            $table->string('id_layanan')->nullable();
            $table->integer('kuantitas');
            $table->integer('total_biaya');
            $table->string('metode_pembayaran')->nullable();
            $table->string('status_pembayaran')->default('belum bayar');
            $table->string('nama_customer');
            $table->timestamps();

            $table->foreign('id_layanan')->references('id_layanan')->on('layanan')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
