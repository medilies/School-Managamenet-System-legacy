<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterForeignkeyConstraintInClassesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classes_types', function (Blueprint $table) {
            $table->dropForeign('classes_types_cycle_foreign');
            //
            $table->foreign('cycle')
                ->references('cycle')->on('cycles')
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
        Schema::table('classes_types', function (Blueprint $table) {
            //
        });
    }
}
