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

        Schema::dropIfExists('tbl_poli');
        Schema::dropIfExists('tbl_dokter');
        Schema::dropIfExists('tbl_resep');
        Schema::dropIfExists('tbl_pasien');
        Schema::dropIfExists('tbl_obat');
        Schema::dropIfExists('tbl_ruangan');
        Schema::dropIfExists('tbl_rkpmds');

        Schema::create('tbl_poli', function (Blueprint $table) {
            $table->id();
            $table->string('poli');
            $table->timestamps();
        });


        Schema::create('tbl_dokter', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('poli_id')->unsigned();
            $table->string('alamat');
            $table->string('telepon');
            $table->timestamps();
        });

        Schema::create('tbl_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alamat');
            $table->string('telepon');
            $table->date('tgl_lahir');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->bigInteger('nobpjs')->length(20);
            $table->string('alergi');
            $table->bigInteger('poli_id')->unsigned();
            $table->text('keluhan');
            $table->string('jkelamin');
            $table->timestamps();
        });

        Schema::create('tbl_ruangan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('keterangan');
            $table->timestamps();
        });

        Schema::create('tbl_obat', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sediaan');
            $table->integer('dosis');
            $table->string('satuan');
            $table->integer('stok');
            $table->integer('harga');
            $table->timestamps();
        });

        Schema::create('tbl_resep', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('dokter_id')->unsigned();
            $table->bigInteger('poli_id')->unsigned();
            $table->bigInteger('obat_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('tbl_rkpmds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resep_id')->unsigned();
            $table->bigInteger('ruangan_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('tbl_rkpmds', function (Blueprint $table) {
            $table->foreign('resep_id')->references('id')->on('tbl_resep');
            $table->foreign('ruangan_id')->references('id')->on('tbl_ruangan');
        });

        Schema::table('tbl_dokter', function (Blueprint $table) {
            $table->foreign('poli_id')->references('id')->on('tbl_poli')->onDelete('cascade');
        });

        Schema::table('tbl_pasien', function (Blueprint $table) {
            $table->foreign('poli_id')->references('id')->on('tbl_poli')->onDelete('cascade');
        });

        Schema::table('tbl_resep', function (Blueprint $table) {
            $table->foreign('dokter_id')->references('id')->on('tbl_dokter')->onDelete('cascade');
            $table->foreign('poli_id')->references('id')->on('tbl_poli')->onDelete('cascade');
            $table->foreign('obat_id')->references('id')->on('tbl_obat')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_poli');
        Schema::dropIfExists('tbl_dokter');
        Schema::dropIfExists('tbl_resep');
        Schema::dropIfExists('tbl_pasien');
        Schema::dropIfExists('tbl_obat');
        Schema::dropIfExists('tbl_ruangan');
        Schema::dropIfExists('tbl_rkpmds');
    }
};
