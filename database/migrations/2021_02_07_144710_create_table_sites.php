<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sites', function (Blueprint $table) {
            $table->id();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('googlemaps')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('LinkedIn')->nullable();
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
        Schema::dropIfExists('Sites');
    }
}
