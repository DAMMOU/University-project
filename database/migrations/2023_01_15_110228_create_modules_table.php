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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filiere_id');
            $table->foreignId('section_id');
            $table->string('intitule');
            $table->string('code')->nullable();
            $table->string('prof')->nullable();
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
        Schema::table('modules',function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['filiere_id','section_id']);
        });
       
        Schema::dropIfExists('modules');
    }
};
