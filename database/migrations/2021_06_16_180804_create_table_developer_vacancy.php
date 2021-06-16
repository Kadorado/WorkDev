<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDeveloperVacancy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('developer_vacancy', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('id_vacancy')->unsigned();
            $table->bigInteger('developer_id')->unsigned();
       
            $table->foreign('id_vacancy')->references('id')->on("vacancies")
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('developer_id')->references('user_id')->on("developers")
                ->onDelete('cascade')
                ->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}