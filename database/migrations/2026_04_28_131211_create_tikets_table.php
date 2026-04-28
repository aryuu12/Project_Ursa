<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->bigIncrements('id_tiket'); // primary key custom
            $table->string('nama_tiket');
            $table->integer('kuota');
            $table->decimal('harga', 12, 2);
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('status')->default('tersedia'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};