<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanDoiKeToansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('can_doi_ke_toans', function (Blueprint $table) {
            $table->id();
            $table->string('Ticker');
            $table->integer('Year');
            $table->integer('Quarter');
            $table->bigInteger('A1');
            $table->bigInteger('A2');
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
        Schema::dropIfExists('can_doi_ke_toans');
    }
}
