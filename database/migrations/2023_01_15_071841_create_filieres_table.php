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
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etablissement_id')->constrained('etablissements');
            $table->foreignId('formation_id')->constrained('formations');
            $table->string('intitule')->nullable();
            $table->string('initiale')->nullable();
            $table->string('option')->nullable();
            $table->string('desc')->nullable();
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
        Schema::table('filieres',function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['etablissement_id','formation_id']);
        });
       
        Schema::dropIfExists('filieres');
    }
};
