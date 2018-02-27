<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('addr');
            $table->string('addr2');
            $table->string('city');
            $table->string("state");
            $table->integer("zip");
            $table->string("community");
            $table->date("lease_date");
            $table->boolean("rented");
            $table->decimal("rent");
            $table->integer("grace");
            $table->integer("tenant")->unsigned();
            $table->foreign("tenant")->references('id')->on('users');
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
        Schema::dropIfExists('properties');
    }
}
