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
        Schema::create('artikelblogs', function (Blueprint $table) {
            $table->id();
            $table->string('namaartikel', 100);
            $table->string('kategori', 100);
            $table->string('deskripsi', 150);
            $table->date('tanggalterbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikelblogs');
    }
};
