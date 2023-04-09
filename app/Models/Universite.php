<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    use HasFactory;
    protected $fillable = [
        'ville_id',
        'initiale',
        'nom',
        'adresse',
        'logo',
    ];

    public function ville(){
        return $this->belongsTo(Ville::class);
    }
    public function etablissements(){
        return $this->hasMany(Etablissement::class);
    }

    public function formation(){
        return $this->hasMany(Etablissement::class,'universite_id','universites');
    }
}
