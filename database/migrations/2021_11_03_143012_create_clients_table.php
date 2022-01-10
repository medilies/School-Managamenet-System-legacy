<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            //
            $table->string('fname', 50);
            $table->string('lname', 50);
            $table->string('phone', 15)->unique();
            $table->string('email', 72)->nullable()->unique();
            $table->string('address', 90)->nullable(); // state, city, zip, door ???
            $table->string('profession', 32);
            $table->string('family_title', 32)->nullable(); // NOT NULLABLE
            //
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            //
            $table->foreignId('family_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
