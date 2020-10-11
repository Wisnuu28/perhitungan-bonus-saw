<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHitungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hitung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->decimal('masa_kerja');
            $table->decimal('jabatan');
            $table->decimal('kedisiplinan', 8, 3);
            $table->decimal('kinerja', 8, 3);
            $table->decimal('total_nilai', 8, 3);
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
        Schema::dropIfExists('hitung');
    }
}
