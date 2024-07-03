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
        Schema::create('transaction_headers', function (Blueprint $table) {
            $table->id();
            $table->integer('no_pesanan');
            $table->date('tanggal_masuk');
            $table->string('cust_id')->nullable();
            $table->string('staff_id');
            $table->timestamps();
            
            $table->foreign('no_pesanan')->references('no_pesanan')->on('transaction_details')->onDelete('cascade');
            $table->foreign('cust_id')->references('cust_id')->on('customers')->onDelete('restrict');
            $table->foreign('staff_id')->references('staff_id')->on('staffs')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_headers');
    }
};
