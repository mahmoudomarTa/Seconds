<?php

namespace App\Models\ecommerce;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    public $translatedAttributes = ['name' ,'description'];
    use SoftDeletes,Translatable;
    protected $table = 'products';
    protected $fillable = ['image' , 'price' ,'discount', 'offer_from' ,'offer_to'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];


    public function attachments(){
        return $this->hasMany(ProductImage::class,'product_id');
    }


    public function getImageAttribute($value)
    {
        if($value){
            return url('uploads/images/products/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }
}
