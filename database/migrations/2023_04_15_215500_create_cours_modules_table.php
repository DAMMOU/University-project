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
        Schema::create('cours_modules', function (Blueprint $table) {
            $table->foreignId('cour_id')->constrained('cours');
            $table->foreignId('module_id')->constrained('modules');
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
        Schema::table('user_roles',function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['cour_id','module_id']);
        });
       
        Schema::dropIfExists('cours_modules');
    }
};