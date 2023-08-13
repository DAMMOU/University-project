<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    protected $fillable = [
        'region_id',
        'nom',
        'cp',        
        'desc',        
    ];
    public function universite(){
        return $this->hasOne(Universite::class);
    }
    public function etablissement(){
        return $this->hasOne(Universite::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function formation(){
        return $this->hasMany(Formation::class);
    }
}
