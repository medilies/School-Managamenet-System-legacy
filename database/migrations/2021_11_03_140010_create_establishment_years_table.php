<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablishmentYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_years', function (Blueprint $table) {
            $table->id();
            $table->year('year_id');
            $table->string('establishment_id', 30);
            //
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            //
            $table->foreign('year_id')
                ->references('id')->on('years')
                ->onDelete('cascade');
            $table->foreign('establishment_id')
                ->references('id')->on('establishments')
                ->onUpdate('cascade');
            //
            $table->unique(['year_id', 'establishment_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishment_years');
    }
}
