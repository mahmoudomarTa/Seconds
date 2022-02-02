<?php

namespace App\Models\ecommerce;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    public $translatedAttributes = ['name', 'description'];
    use SoftDeletes, Translatable;

    protected $table = 'products';
    protected $fillable = ['image', 'price', 'discount', 'offer_from', 'offer_to'];
    protected $hidden = ['updated_at', 'deleted_at', 'translations'];


    public function attachments()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }


    public function getAvailableOfferAttribute()
    {
        return $this->offer_from . ' ' . '_' . ' ' . $this->offer_to;

    }

    public function getFinalDiscountAttribute(){
        $offer_from = $this->offer_from;
        $offer_to = $this->offer_to;
        $discount=$this->discount;

        if ($offer_to >= now()->toDateString()&&$this->status=='active') {
            if ($discount!=null&&$discount>0) {
                return $discount;
            }
        }else{
            return 0;
        }
        }

    public function getPriceOfferAttribute()
    {
        $offer_from = $this->offer_from;
        $offer_to = $this->offer_to;
        if ( $offer_to >= now()->toDateString()&&$this->status=='active') {
            $price = $this->price;
            $discount = $this->discount;
            $discount = ($price * $discount) / 100;
            $newPrice = $price - $discount;
            return $newPrice;
        } else {
            return $this->price;
        }
    }

//    public function getDiscountAttribute()
//    {
//
//        $productoffer = $this->where('offer_from', '<=', now()->toDateString())->where('offer_to', '>=', now()->toDateString())->first();
//        if ($productoffer) {
//            return $productoffer->discount;
//        } else {
//            return 0;
//        }
//
//    }

    public function getLogoAttribute($value)
    {
        if ($value) {
            return url('uploads/images/products/' . $value);
        } else {
            return url('landing_page/images/est.png');
        }
    }
}
