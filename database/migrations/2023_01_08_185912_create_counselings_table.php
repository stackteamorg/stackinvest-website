<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counselings', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('startup_name');
            $table->string('startup_activity');
            $table->string('email');
            $table->string('mobile');
            $table->string('investor_name');
            $table->string('consultation_subject');
            $table->enum('type_of_consultation', ['in person', 'online'])->nullable();
            $table->string('city ​_of_residence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counselings');
    }
};
