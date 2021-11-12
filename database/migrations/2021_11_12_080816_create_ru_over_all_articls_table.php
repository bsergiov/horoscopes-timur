<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuOverAllArticlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ru_over_all_articls', function (Blueprint $table) {
            $table->id();
            $table->string('title', 155)->nullable();
            $table->text('body')->nullable();
            $table->string('category', 155)->nullable();
            $table->string('sign', 155)->nullable();
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
        Schema::dropIfExists('ru_over_all_articls');
    }
}
