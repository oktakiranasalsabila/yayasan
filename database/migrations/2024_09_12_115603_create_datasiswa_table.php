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
        Schema::create('datasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique();
            $table->string('nama_leng');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenkel', ['L', 'P']);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('agama');
            $table->string('tlp_ortu');
            $table->text('alamat');
            $table->string('password');
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datasiswa');
    }
};
