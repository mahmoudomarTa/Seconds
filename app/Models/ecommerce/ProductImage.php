<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['product_id', 'product_img'];
    protected $table = 'product_images';
    protected $hidden = ['updated_at', 'deleted_at'];


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function getProductImgAttribute($image)
    {
        return !is_null($image) ? url('uploads/images/products/' . $image) : url('uploads/images/products/defualt.jpg');
    }
}
