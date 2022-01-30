<?php

namespace App\Models\ecommerce;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model implements TranslatableContract
{
    use HasFactory;
    public $translatedAttributes = ['name'];

    use SoftDeletes,Translatable;
    protected $table = 'categories';
    protected $fillable = ['image'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function getImageAttribute($value)
    {
        if($value){
            return url('uploads/images/category/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }
}
