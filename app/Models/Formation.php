<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'etablissement_id',
        'universite_id',
        'type_formation_id',
        'categorie_formation_id',
        'domaine_formation_id',
        'niveau',
        'initiale',
        'intitule',
        'duree',
        'domaine',
        'etat',
        'desc',
        
    ];

    public function etablissement(){
        return $this->belongsTo(Etablissement::class);
    }
    public function filieres(){
        return $this->hasMany(Filiere::class,'formation_id','id');
    }
    public function universite(){
        return $this->belongsTo(Universite::class);
    }
    public function type(){
        return $this->belongsTo(TypeFormation::class,'type_formation_id','id');
    }

    public function categorie(){
        return $this->belongsTo(CategorieFormation::class,'categorie_formation_id','id');
    }
    public function domaine(){
        return $this->belongsTo(DomaineFormation::class,'domaine_formation_id','id');
    }
    public function ville(){
        return $this->belongsTo(Ville::class);
    }
}
