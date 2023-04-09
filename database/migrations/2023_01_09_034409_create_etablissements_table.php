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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->string('initiale')->nullable();
            $table->string('nom')->nullable();
            $table->string('type')->nullable();
            $table->string('adresse')->nullable();
            $table->string('logo')->nullable();
            $table->string('site')->nullable();
            $table->string('desc')->nullable();
            $table->foreignId('universite_id');
            $table->foreignId('ville_id');
            $table->foreignId('categorie_etablissement_id');
            $table->foreignId('type_etablissement_id');
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
        Schema::table('etablissements',function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['universite_id','ville_id','categorie_etablissement_id','type_etablissement_id']);
        });
       
        Schema::dropIfExists('etablissements');
    }
};
