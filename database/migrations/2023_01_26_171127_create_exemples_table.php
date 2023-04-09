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
        Schema::create('exemples', function (Blueprint $table) {
            $table->id();
            $table->string('chemin')->nullable();
            $table->foreignId('type_exemple_id');
            $table->string('categorie_exemple_id')->nullable();
            $table->foreignId('desc')->nullable();
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
        Schema::table('exemples',function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['type_exemple_id','categorie_exemple_id']);
        });
        Schema::dropIfExists('exemples');
    }
};
