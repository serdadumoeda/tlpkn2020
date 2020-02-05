<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemuanbpksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temuanbpks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('esi_id')->nullable()->unsigned();
            $table->unsignedBigInteger('esii_id');
            $table->string('tahun');
            $table->string('no_rhs');
            $table->text('temuan');
            $table->decimal('kerugian_negara',30,0);
            $table->decimal('tindak_lanjut',30,0);
            $table->decimal('sisa',30,0);
            $table->text('keterangan');
            $table->string('sktjm');
            $table->timestamps();
            $table->foreign('esii_id')->references('id')->on('unit_eselon_ii')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temuanbpks');
    }
}
