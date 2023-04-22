<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exemple extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'chemin', 
        'type_exemple_id', 
        'categorie_exemple_id', 
        'desc'
    ];

    public function typeExemple()
    {
        return $this->belongsTo(TypeExemple::class);
    }

    public function categorieExemple()
    {
        return $this->belongsTo(CategorieExemple::class);
    }
}
