<?php

namespace App\Models\landing_page;


use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Twitter extends Model
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes =['title','content'];

    public function getImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }
}
