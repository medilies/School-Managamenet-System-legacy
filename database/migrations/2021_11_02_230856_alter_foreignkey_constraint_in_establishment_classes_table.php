<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterForeignkeyConstraintInEstablishmentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('establishment_classes', function (Blueprint $table) {
            $table->dropForeign('establishment_classes_establishment_foreign');
            //
            $table->foreign('establishment')
                ->references('establishment')->on('establishments')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('establishment_classes', function (Blueprint $table) {
            //
        });
    }
}
