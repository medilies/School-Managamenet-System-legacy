<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->id();
            $table->set("validation", ["pending", "accepted", "refused"])->default("pending");
            $table->boolean('paid')->default(0);
            //
            $table->timestamp('sub_at')->useCurrent();
            $table->timestamp('sub_updated_at')->useCurrent()->useCurrentOnUpdate();
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
        Schema::dropIfExists('student_registrations');
    }
}
