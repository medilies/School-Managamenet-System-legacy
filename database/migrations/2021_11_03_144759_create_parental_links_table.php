<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentalLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parental_links', function (Blueprint $table) {
            $table->string('rel', 15);
            //
            $table->dateTime('created_at')
                ->useCurrent();
            $table->dateTime('updated_at')
                ->useCurrent()
                ->useCurrentOnUpdate();
            //
            $table->foreignId('client_id')->constrained();
            $table->foreignId('student_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parental_links');
    }
}
