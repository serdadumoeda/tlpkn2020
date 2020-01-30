<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEseloniisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('unit_eselon_ii', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_satker');
            $table->string('name');
            $table->unsignedBigInteger('esi_id');
            
            $table->timestamps();
            $table->foreign('esi_id')->references('id')->on('unit_eselon_i')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_eselon_ii');
    }
}
