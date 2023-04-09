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
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('chemin')->nullable();
            $table->string('desc')->nullable();
            $table->foreignId('type_cv_id');
            $table->foreignId('categorie_cv_id');
          
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
        Schema::table('cvs',function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['type_vc_id','categorie_cv_id']);
        });
        Schema::dropIfExists('cvs');
    }
};
