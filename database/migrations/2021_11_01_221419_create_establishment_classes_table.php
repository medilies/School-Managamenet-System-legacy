<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablishmentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_classes', function (Blueprint $table) {
            $table->id();
            $table->string('establishment', 20);
            //
            $table->foreignId('class_type_id')->references('id')->on('classes_types');
            $table->foreign('establishment')->references('establishment')->on('establishments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishment_classes');
    }
}
