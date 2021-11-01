<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cycle', 20);
            //
            $table->dateTime('sub_at')
                ->useCurrent();
            $table->dateTime('sub_modified_at')
                ->useCurrent()
                ->useCurrentOnUpdate();
            //
            $table->foreign('cycle')->references('cycle')->on('cycles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes_types');
    }
}
