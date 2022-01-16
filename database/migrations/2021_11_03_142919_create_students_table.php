<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            //
            $table->string('fname', 50);
            $table->string('ar_fname', 50)->nullable();
            $table->string('lname', 50);
            $table->string('ar_lname', 50)->nullable();
            $table->date('bday');
            $table->string('bplace', 32); // comparison list ?
            $table->string('email', 72)->nullable()->unique();
            //
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            //
            $table->foreignId('family_id')->nullable()->constrained();
            //
            $table->unique(['fname', 'lname', 'bday']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
