<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_labs', function (Blueprint $table) {
            $table->integer('test_id')->unsigned();
            $table->integer('lab_id')->unsigned();
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(array('test_id', 'lab_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests_labs');
    }
}
