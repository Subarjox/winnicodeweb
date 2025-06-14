<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id('id_berita'); // Auto-increment & primary
            $table->unsignedBigInteger('id_penulis');
            $table->mediumText('judul');
            $table->mediumText('kategori');
            $table->mediumText('gambar');
            $table->date('changed_at');
            $table->longText('deskripsi');
            $table->integer('dislikes')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('views')->default(0);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_penulis')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
