<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieExemple extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule',
        'initiale',
    ];

    public function exemples()
    {
        return $this->hasMany(Exemple::class);
    }
}
