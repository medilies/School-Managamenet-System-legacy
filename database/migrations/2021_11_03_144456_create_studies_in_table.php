<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies_in', function (Blueprint $table) {
            $table->boolean('accepted')->default(0);
            $table->boolean('paid')->default(0);
            //
            $table->dateTime('created_at')
                ->useCurrent();
            $table->dateTime('updated_at')
                ->useCurrent()
                ->useCurrentOnUpdate();
            //
            $table->foreignId('student_id')->constrained();
            $table->foreignId('year_class_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studies_in');
    }
}
