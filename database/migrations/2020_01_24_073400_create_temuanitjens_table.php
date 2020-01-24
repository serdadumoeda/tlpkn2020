<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemuanitjensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temuan_itjens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('esi_id')->nullable()->unsigned();
            $table->integer('esii_id')->nullable()->unsigned();
            $table->string('tahun_periksa');
            $table->string('no_rhs');
            $table->string('uraian');
            $table->decimal('kerugian_negara',30,0);
            $table->decimal('tindak_lanjut',30,0);
            $table->decimal('sisa',30,0);
            $table->text('keterangan');
            $table->string('sktjm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temuan_itjens');
    }
}
