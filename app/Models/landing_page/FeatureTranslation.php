<?php

namespace App\Models\landing_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureTranslation extends Model
{
    use HasFactory;
    protected $fillable=['title','description'];
}
