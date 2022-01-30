<?php

namespace App\Models\landing_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class LandingPage extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;


    public $translatedAttributes = ['home_description','likes','communication','advertising','users','about',
        'about_description','first_about','second_about','third_about','features','features_description','how_works','first_step','first_step_description','second_step','second_step_description','third_step','third_step_description'
        ,'fourth_step','fourth_step_description','client_say','contact_us','contact_information','location'
        ,'location_value','mobile','phone','full_name','send','copy_write','home_title','contact_form','email','write_your_message','how_works_description','google_play','app_store'];

    public function getLogoAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

    public function getHomeImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

    public function getLikeImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

    public function getFullNameImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }


    public function getCommunicationImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

    public function getAdvertisingImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

    public function getUsersImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }
    public function getAboutImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }
    public function getFeatureImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

    public function getHowItWorksImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

    public function getLocationImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

    public function getEmailImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }
    public function getMobileImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

    public function getPhoneImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }
    public function getUserImageAttribute($value)
    {
        if($value){
            return url('landing_page/images/'.$value);
        }else{
            return url('landing_page/images/est.png');
        }
    }

}
