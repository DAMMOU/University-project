<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'initiale',
        'nom',
        'universite_id',
        'ville_id',
        'categorie_etablissement_id',
        'type_etablissement_id',
        'site',
        'logo',
        'adresse',
        'desc',
      
    ];

    public function universite(){
        return $this->belongsTo(Universite::class);
    }
    public function ville(){
        return $this->belongsTo(Ville::class);
    }
    public function formations(){
        return $this->hasMany(Formation::class);
    }
    public function filieres(){
        return $this->hasMany(Filiere::class);
    }
    public function typeEtablissement(){
        return $this->belongsTo(TypeEtablissement::class);
    }
    public function categorieEtablissement(){
        return $this->belongsTo(CategorieEtablissement::class);
    }
  
}
