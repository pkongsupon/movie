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
        Schema::create('tag_list', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('movie_id');
            $table->foreignId('tag_id');
            $table->timestamps();
            $table->index(['movie_id', 'tag_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_list');
    }
};
