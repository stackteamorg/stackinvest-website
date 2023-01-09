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
        Schema::create('consultant_requests', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('startup_name');
            $table->string('startup_department');
            $table->string('email');
            $table->string('mobile');
            $table->string('investor');
            $table->string('subject');
            $table->enum('request_type', ['online', 'personal']);
            $table->string('city');
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
        Schema::dropIfExists('consultant_requests');
    }
};
