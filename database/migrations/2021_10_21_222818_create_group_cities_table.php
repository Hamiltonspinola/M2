<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_cities', function (Blueprint $table) {
            $table->id();

            //Tabela City
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                                        ->references('id')
                                        ->on('cities')
                                        ->onDelete('cascade');

            //Tabela Group
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')
                                        ->references('id')
                                        ->on('groups')
                                        ->onDelete('cascade');
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
        Schema::dropIfExists('group_cities');
    }
}
