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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->boolean('answer_is_big');
            $table->boolean('answer_is_fluff');
            $table->boolean('answer_is_walking');
            $table->boolean('answer_is_smart');
            $table->boolean('answer_is_shyness');
            $table->boolean('answer_is_biting');
            $table->boolean('answer_is_nuisance');
            $table->boolean('answer_is_independent');
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
        Schema::dropIfExists('answers');
    }
};
