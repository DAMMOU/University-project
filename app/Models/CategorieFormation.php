<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieFormation extends Model
{
    use HasFactory;
    protected $table ='categorie_formations';

    protected $fillable =['intitule','initiale'];

    public function formations(){
        return $this->hasMany(Formation::class);
    }
}
