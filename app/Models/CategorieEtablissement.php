<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieEtablissement extends Model
{
    use HasFactory;
    protected $table ='categorie_etablissements';

    protected $fillable =['label','desc'];

    public function etablissements(){
        return $this->hasMany(Etablissement::class);
    }
}
