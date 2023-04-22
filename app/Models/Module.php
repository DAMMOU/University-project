<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'filiere_id',
        'section_id',
        'code',
        'intitule',
        'prof',
        'desc',
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
    public function section()
    {
        return $this->  belongsTo(Section::class);
    }

    public function cours()
    {
        return $this->belongsToMany(Cour::class, 'cours_modules');
    }
    public function pfes()
    {
        return $this->belongsToMany(Pfe::class);
    }
}
