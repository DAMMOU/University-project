<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'etablissement_id',
        'formation_id',
        'initiale',
        'intitule',
        'option',
        'desc',
    ];

    public function formation(){
        return $this->belongsTo(Formation::class);
    }
    public function modules(){
        return $this->hasMany(Module::class);
    }
    public function etablissement(){
        return $this->belongsTo(Etablissement::class);
    }
    

}

