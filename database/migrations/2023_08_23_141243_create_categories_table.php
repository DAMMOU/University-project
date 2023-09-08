<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Eloquent\Factories\Factory;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image');
            $table->timestamps();
        });

        DB::table('categories')->insert([
            
            [
                'name' => 'Books and Stationery',
                'image' => 'https://plus.unsplash.com/premium_photo-1685287729807-51daa164f458?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fEJvb2tzJTIwYW5kJTIwU3RhdGlvbmVyeXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60',

            ],
            [
                'name' => 'Electronics',
                'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGVsZWN0cm9uaWNzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60',

            ],
            [
                'name' => 'Clothing and Accessories',
                'image' => 'https://plus.unsplash.com/premium_photo-1679669192872-1733bfda6df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fHNhY3MlMjAlQzMlQTAlMjBkb3MlMkMlMjBjYXNxdWV0dGVzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60',
            ],
            [
                'name' => 'Study Aids',
                'image' => 'https://plus.unsplash.com/premium_photo-1681843675610-1ae632fdbbf2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTV8fHN0eWxvcyUyMHN1cmxpZ25ldXJzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60',
            ],
            [
                'name' => 'Travel and Luggage',
                'image' => "https://images.unsplash.com/photo-1516685304081-de7947d419d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fFRyYXZlbCUyMGFuZCUyMEx1Z2dhZ2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
