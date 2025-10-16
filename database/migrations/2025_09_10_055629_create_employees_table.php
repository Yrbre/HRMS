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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('kodeperusahaan', 5)->nullable();
            $table->string('nmperusahaan', 50)->nullable();
            $table->string('jkdesc', 10)->nullable();
            $table->string('jkcode', 10)->nullable();
            $table->string('nomor', 20)->nullable();
            $table->string('payroll', 20)->nullable();
            $table->string('payrolldesc', 20)->nullable();
            $table->string('nik', 10)->nullable();
            $table->string('namalengkap', 40)->nullable();
            $table->string('jab', 20)->nullable();
            $table->string('jabdesc', 50)->nullable();
            $table->string('grade', 20)->nullable();
            $table->string('gradedesc', 20)->nullable();
            $table->string('nikold', 20)->nullable();
            $table->string('deptcode', 20)->nullable();
            $table->string('deptdesc', 20)->nullable();
            $table->string('sexcode', 20)->nullable();
            $table->string('sexdesc', 20)->nullable();
            $table->string('calgrp', 20)->nullable();
            $table->string('calgrpdesc', 50)->nullable();
            $table->string('worktype', 20)->nullable();
            $table->string('workdesc', 50)->nullable();
            $table->integer('workdayweek')->nullable();
            $table->integer('workdayhours')->nullable();
            $table->date('tglmasuk')->nullable();
            $table->integer('masakerja')->nullable();
            $table->integer('mk_thn')->nullable();
            $table->integer('mk_bln')->nullable();
            $table->integer('mk_hari')->nullable();
            $table->date('tglaktif')->nullable();
            $table->string('koderesign', 20)->nullable();
            $table->date('tglresign')->nullable();
            $table->integer('sisacuti')->nullable();
            $table->string('tax', 20)->nullable();
            $table->string('taxdesc', 20)->nullable();
            $table->string('npwp', 30)->nullable();
            $table->string('kodetax', 20)->nullable();
            $table->string('namatax', 20)->nullable();
            $table->string('ptkp', 20)->nullable();
            $table->string('kodebpjs', 20)->nullable();
            $table->string('no_asuransi', 20)->nullable();
            $table->string('no_bpjs', 20)->nullable();
            $table->string('nama_awal', 30)->nullable();
            $table->string('nama_tengah', 30)->nullable();
            $table->string('nama_akhir', 30)->nullable();
            $table->string('tempatlahir', 30)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->integer('umur_thn')->nullable();
            $table->integer('umur_bln')->nullable();
            $table->integer('umur_hari')->nullable();
            $table->string('pendidikan', 20)->nullable();
            $table->string('agama', 20)->nullable();
            $table->string('gol_darah', 20)->nullable();
            $table->string('alamat_ktp', 150)->nullable();
            $table->string('alamat_domisili', 150)->nullable();
            $table->string('no_ktp', 20)->nullable();
            $table->date('reg_ktp')->nullable();
            $table->date('exp_ktp')->nullable();
            $table->string('email', 40)->nullable();
            $table->string('kontak_keluarga', 40)->nullable();
            $table->string('kontak_status', 20)->nullable();
            $table->string('kontak_relasi', 20)->nullable();
            $table->string('kontak_telepon', 40)->nullable();
            $table->string('kontak_alamat', 150)->nullable();
            $table->string('bank', 20)->nullable();
            $table->string('bank_kcu', 50)->nullable();
            $table->string('bank_norek', 20)->nullable();
            $table->string('bank_account', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
