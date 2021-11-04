<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year_classes', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->unsignedBigInteger('establishment_class_id');
            $table->boolean('active')->default(false);
            $table->unsignedSmallInteger('capacity')->default(0);
            //
            $table->timestamp('created_at')
                ->useCurrent();
            $table->timestamp('updated_at')
                ->useCurrent()
                ->useCurrentOnUpdate();
            //
            $table->foreign('year')
                ->references('year')->on('years');
            $table->foreign('establishment_class_id')
                ->references('id')->on('establishment_classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('year_classes');
    }
}
