<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_arsip');
            $table->string('slug_arsip')->unique();
            $table->text('isi');
            $table->date('tgl_publish');
            $table->integer('user_id');
            $table->string('file')->nullable();
            $table->integer('view');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsip');
    }
}
