<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pfe extends Model
{
    use HasFactory;
    protected $table ='pfes';
    protected $fillable = [
        'label',
        'path',
        'domain',
        'annee',
        'niveau',
    ];

    // Relation plusieurs à plusieurs
    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }
}
