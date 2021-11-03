<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cycles', function (Blueprint $table) {
            $table->string('cycle', 20);
            //
            $table->dateTime('created_at')
                ->useCurrent();
            $table->dateTime('updated_at')
                ->useCurrent()
                ->useCurrentOnUpdate();
            //
            $table->primary('cycle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cycles');
    }
}
