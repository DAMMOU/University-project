<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCv extends Model
{
    use HasFactory;
    protected $table ='type_cvs';
    protected $fillable = ['intitule','initiale'];

    public function type(){
        return $this->hasMany(Cv::class,'type_cv_id','id');
    }

}
