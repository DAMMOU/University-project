<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieCv extends Model
{
    use HasFactory;
    protected $table ='categorie_cvs';

    protected $fillable = ['intitule','initiale'];

    public function categorie(){
        return $this->hasMany(Cv::class,'categorie_cv_id','id');
    }
   
}
