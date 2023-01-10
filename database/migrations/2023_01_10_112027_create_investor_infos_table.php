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
        Schema::create('investor_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('investor_id')->references('id')->on('investors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('key');
            $table->string('value');
            $table->string('comment');
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
        Schema::dropIfExists('investor_infos');
    }
};
