<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("property_id")->unsigned();
            $table->foreign("property_id")->references('id')->on('properties');
            $table->string("description");
            $table->boolean("completed")->nullable();
            $table->date("completed_at")->nullable();
            $table->integer("contractor")->unsigned();
            $table->foreign("contractor")->references('id')->on('users');
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
        Schema::dropIfExists('repairs');
    }
}
