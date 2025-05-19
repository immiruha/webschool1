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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string ('nisn');
            $table->string ('nama_lengkap');
            $table->datetime ('tempat_tanggal_lahir');
            $table->enum ('jenis_kelamin', ['Laki - laki', 'Perempuan']);
            $table->string ('no_telp_siswa');
            $table->string ('jumlah_saudara');
            $table->string ('no_kartu_keluarga');
            $table->string ('nik_siswa');
            $table->string ('nik_ayah');
            $table->string ('nik_ibu');
            $table->string ('nama_ayah');
            $table->string ('nama_ibu');
            $table->string ('pekerjaan_ayah');
            $table->string ('pekerjaan_ibu');
            $table->string ('alamat_lengkap');
            $table->string ('sekolah_asal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
