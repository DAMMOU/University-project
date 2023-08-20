<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('name', 128); //128 Taille raisonnable pour identifier des entités uniques
            $table->text('value')->nullable(); 
        });

        DB::table('settings')->insert([
            
            [
                'name' => 'author',
                'value' => 'DAMMOU Youssef',
            ],
            [
                'name' => 'keywords',
                'value' => "apprentissage en ligne, cours en ligne, éducation, ressources éducatives, sujets académiques, formation en ligne",              
            ],
            [
                'name' => 'description',
                'value' => "La Fac est un site dédié à l'apprentissage en ligne de divers sujets académiques et pratiques. Trouvez des cours, des ressources éducatives et bien plus encore.",
            ],
            [
                'name' => 'title',
                'value' => 'La Fac',
            ],
            [
                'name' => 'css',
                'value' => '',
            ],
            [
                'name' => 'js',
                'value' => '',
            ],
            [
                'name' => 'username',
                'value' => ''
            ],
        ]);
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
