<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->year('year_id');
            $table->string('establishment_id', 30);
            $table->unsignedSmallInteger('capacity')->default(0);
            //
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            //
            $table->foreignId('class_type_id')->constrained();
            $table->foreign('establishment_id')
                ->references('id')->on('establishments')
                ->onUpdate('cascade');
            $table->foreign('year_id')
                ->references('id')->on('years')
                ->onUpdate('cascade');
            //
            $table->unique(['class_type_id', 'establishment_id', 'year_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
