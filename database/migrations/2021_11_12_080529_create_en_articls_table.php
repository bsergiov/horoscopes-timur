<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnArticlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_articls', function (Blueprint $table) {
            $table->id();
            $table->string('title', 155)->nullable();
            $table->text('body', 155)->nullable();
            $table->text('category', 155)->nullable();
            $table->text('sign', 155)->nullable();
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
        Schema::dropIfExists('en_articls');
    }
}
