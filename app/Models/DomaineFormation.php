<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomaineFormation extends Model
{
    use HasFactory;
    protected $table ='domaine_formations';

    protected $fillable =['intitule','initiale'];

    public function formations(){
        return $this->hasMany(Formation::class);
    }
}
