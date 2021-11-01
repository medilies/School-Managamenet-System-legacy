<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            //
            $table->string('fname', 50)
                ->nullable(false);
            // $table->string('ar_fname', 50)
            //     ->nullable(false);
            $table->string('lname', 50)
                ->nullable(false);
            // $table->string('ar_lname', 50)
            //     ->nullable(false);
            $table->string('profession', 20);
            //
            $table->string('phone', 15);
            $table->string('email', 72);
            $table->string('address', 50); // state, city, zip, door ???
            //
            $table->dateTime('created_at')
                ->useCurrent();
            $table->dateTime('updated_at')
                ->useCurrent()
                ->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parents');
    }
}
