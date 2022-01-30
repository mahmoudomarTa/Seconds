<?php

namespace App\Models\landing_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=['image','user_name','comment_text','rating'];

    public function getImageAttribute($value)
    {
        if($value){
            return url('/dashboard/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }
}
