<?php

namespace App\Models\landing_page;


use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
class Feature extends Model implements TranslatableContract
{
    use HasFactory;

    use Translatable;
    protected $guarded=['*'];

    protected $fillable=['image'];
    public $translatedAttributes = ['title', 'description'];

    public function getImageAttribute($value)
    {
        if($value){
            return url('/dashboard/images/'.$value);
        }else{
            return url('/dashboard/images/est.png');
        }
    }
}
