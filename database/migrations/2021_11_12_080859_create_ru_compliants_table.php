<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuCompliantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ru_compliants', function (Blueprint $table) {
            $table->id();
            $table->string('title', 155)->nullable();
            $table->text('body')->nullable();
            $table->string('pair', 155)->nullable();
            $table->integer('ltfv')->nullable();
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
        Schema::dropIfExists('ru_compliants');
    }
}
