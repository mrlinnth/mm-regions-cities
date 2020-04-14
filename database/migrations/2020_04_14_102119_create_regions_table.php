<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mmrc_regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_mm')->nullable();
            $table->integer('capital')->nullable();
            $table->string('iso')->nullable();
            $table->string('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mmrc_regions');
    }
}
