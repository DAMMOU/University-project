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
        Schema::create('module_pfe', function (Blueprint $table) {
            $table->foreignId('pfe_id')->constrained('pfes');
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
        Schema::table('pfes_roles',function(Blueprint $table){
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['pfe_id','module_id']);
        });
       
        Schema::dropIfExists('module_pfe');
    }
};
