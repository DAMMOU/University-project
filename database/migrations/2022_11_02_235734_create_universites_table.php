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
        Schema::create('universites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ville_id');
            $table->string('initiale')->nullable();
            $table->string('nom')->nullable();
            $table->string('desc')->nullable();
            $table->string('president')->nullable();
            $table->string('adresse')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('universites',function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['ville_id']);
        });
       
        Schema::dropIfExists('universites');
    }
};
