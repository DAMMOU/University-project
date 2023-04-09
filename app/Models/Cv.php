<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $table = 'cvs';
   

    protected $fillable = ['chemin', 'desc','type_cv_id','categorie_cv_id'];

    public function categorie(){
        return $this->belongsTo(CategorieCv::class);
    }

    public function type(){
        return $this->belongsTo(TypeCv::class);
    }



}
