<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategoryTranslation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name'];
}
