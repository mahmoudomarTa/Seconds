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


}
