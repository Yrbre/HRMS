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
        Schema::create('trainees', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->string('namalengkap')->nullable();
            $table->string('deptdesc')->nullable();
            $table->string('deptcode')->nullable();
            $table->string('jab')->nullable();
            $table->string('jabdesc')->nullable();
            $table->date('joindate')->nullable();
            $table->date('tr_orientasi')->nullable();
            $table->string('trdesc_orientasi')->nullable();
            $table->date('tr_refreshing_course')->nullable();
            $table->string('trdesc_refreshing_course')->nullable();
            $table->date('tr_qcdasar')->nullable();
            $table->string('trdesc_qcdasar')->nullable();
            $table->date('tr_qcmenengah')->nullable();
            $table->string('trdesc_qcmenengah')->nullable();
            $table->date('tr_qclanjut')->nullable();
            $table->string('trdesc_qclanjut')->nullable();
            $table->date('tr_proses')->nullable();
            $table->string('trdesc_proses')->nullable();
            $table->date('tr_trainer')->nullable();
            $table->string('trdesc_trainer')->nullable();
            $table->date('tr_lingkungan')->nullable();
            $table->string('trdesc_lingkungan')->nullable();
            $table->date('tr_insidentil')->nullable();
            $table->string('trdesc_insidentil')->nullable();
            $table->date('tr_p3k')->nullable();
            $table->string('trdesc_p3k')->nullable();
            $table->date('tr_smk3')->nullable();
            $table->string('trdesc_smk3')->nullable();
            $table->date('tr_radioaktif')->nullable();
            $table->string('trdesc_radioaktif')->nullable();
            $table->date('tr_sio')->nullable();
            $table->string('trdesc_sio')->nullable();
            $table->date('tr_iso')->nullable();
            $table->string('trdesc_iso')->nullable();
            $table->date('tr_sjh')->nullable();
            $table->string('trdesc_sjh')->nullable();
            $table->date('tr_apar')->nullable();
            $table->string('trdesc_apar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainees');
    }
};
