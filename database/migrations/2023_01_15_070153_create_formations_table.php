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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('intitule')->nullable();
            $table->string('initiale')->nullable();
            $table->integer('niveau')->nullable();
            $table->integer('duree')->nullable();
            $table->string('domaine')->nullable();
            $table->string('desc')->nullable();
            $table->string('etat')->nullable();
            $table->foreignId('universite_id');
            $table->foreignId('etablissement_id');
            $table->foreignId('type_formation_id');
            $table->foreignId('categorie_formation_id');
            $table->foreignId('domaine_formation_id');
            $table->foreignId('ville_id');
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
        Schema::table('formations',function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign([
                                'universite_id','etablissement_id','type_formation_id',
                                'categorie_formation_id', 'ville_id','domaine_formation_id'
                            ]);
        });
       
        Schema::dropIfExists('formations');
    }
};

