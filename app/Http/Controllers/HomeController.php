<?php

namespace App\Http\Controllers;

use App\Http\Helpers;
use App\Models\general\Language;
use App\Models\landing_page\LandingPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index($local)
    {
//        if (Helpers::can('home')) {
        app()->setLocale($local);
        $landingPage = LandingPage::first();
        return view('admin.dashboard.home')->with(compact('landingPage'));
//        }else{
//            app()->setLocale($local);
//            return view('admin.dashboard.no_permission');
//        }
    }


    public function update(Request $request)
    {
        if (Helpers::can('home')) {

            $roles = [
                // 'image' => 'required|image|mimes:jpeg,jpg,png',
            ];
            $locales = Language::all()->pluck('lang');
            foreach ($locales as $locale) {
                $roles['home_title' . '_' . $locale] = 'required';
                $roles['home_description' . '_' . $locale] = 'required';
                $roles['likes' . '_' . $locale] = 'required';
                $roles['communication' . '_' . $locale] = 'required';
                $roles['advertising' . '_' . $locale] = 'required';
                $roles['users' . '_' . $locale] = 'required';
                $roles['about_description' . '_' . $locale] = 'required';
                $roles['second_about' . '_' . $locale] = 'required';
                $roles['third_about' . '_' . $locale] = 'required';
                $roles['features' . '_' . $locale] = 'required';
                $roles['features_description' . '_' . $locale] = 'required';
                $roles['how_works' . '_' . $locale] = 'required';
                $roles['first_step' . '_' . $locale] = 'required';
                $roles['first_step_description' . '_' . $locale] = 'required';
                $roles['second_step' . '_' . $locale] = 'required';
                $roles['second_step_description' . '_' . $locale] = 'required';
                $roles['third_step' . '_' . $locale] = 'required';
                $roles['third_step_description' . '_' . $locale] = 'required';
                $roles['fourth_step' . '_' . $locale] = 'required';
                $roles['fourth_step_description' . '_' . $locale] = 'required';
                $roles['client_say' . '_' . $locale] = 'required';
                $roles['contact_us' . '_' . $locale] = 'required';
                $roles['contact_information' . '_' . $locale] = 'required';
                $roles['location' . '_' . $locale] = 'required';
                $roles['location_value' . '_' . $locale] = 'required';
                $roles['mobile' . '_' . $locale] = 'required';
                $roles['full_name' . '_' . $locale] = 'required';
                $roles['send' . '_' . $locale] = 'required';
                $roles['copy_write' . '_' . $locale] = 'required';
                $roles['contact_form' . '_' . $locale] = 'required';
                $roles['email' . '_' . $locale] = 'required';
                $roles['write_your_message' . '_' . $locale] = 'required';
                $roles['how_works_description' . '_' . $locale] = 'required';
                $roles['google_play' . '_' . $locale] = 'required';
                $roles['app_store' . '_' . $locale] = 'required';

            }
            $this->validate($request, $roles);
            $landingPage = LandingPage::query()->findOrFail(1);

            foreach ($locales as $locale) {
                $landingPage->translateOrNew($locale)->home_title = $request->get('home_title' . '_' . $locale);
                $landingPage->translateOrNew($locale)->home_description = $request->get('home_description' . '_' . $locale);
                $landingPage->translateOrNew($locale)->likes = $request->get('likes' . '_' . $locale);
                $landingPage->translateOrNew($locale)->communication = $request->get('communication' . '_' . $locale);
                $landingPage->translateOrNew($locale)->advertising = $request->get('advertising' . '_' . $locale);
                $landingPage->translateOrNew($locale)->users = $request->get('users' . '_' . $locale);
                $landingPage->translateOrNew($locale)->about_description = $request->get('about_description' . '_' . $locale);
                $landingPage->translateOrNew($locale)->second_about = $request->get('second_about' . '_' . $locale);
                $landingPage->translateOrNew($locale)->third_about = $request->get('third_about' . '_' . $locale);
                $landingPage->translateOrNew($locale)->features = $request->get('features' . '_' . $locale);
                $landingPage->translateOrNew($locale)->features_description = $request->get('features_description' . '_' . $locale);
                $landingPage->translateOrNew($locale)->how_works = $request->get('how_works' . '_' . $locale);
                $landingPage->translateOrNew($locale)->first_step = $request->get('first_step' . '_' . $locale);
                $landingPage->translateOrNew($locale)->first_step_description = $request->get('first_step_description' . '_' . $locale);
                $landingPage->translateOrNew($locale)->second_step = $request->get('second_step' . '_' . $locale);
                $landingPage->translateOrNew($locale)->second_step_description = $request->get('second_step_description' . '_' . $locale);
                $landingPage->translateOrNew($locale)->third_step = $request->get('third_step' . '_' . $locale);
                $landingPage->translateOrNew($locale)->third_step_description = $request->get('third_step_description' . '_' . $locale);
                $landingPage->translateOrNew($locale)->fourth_step = $request->get('fourth_step' . '_' . $locale);
                $landingPage->translateOrNew($locale)->client_say = $request->get('client_say' . '_' . $locale);
                $landingPage->translateOrNew($locale)->contact_us = $request->get('contact_us' . '_' . $locale);
                $landingPage->translateOrNew($locale)->contact_information = $request->get('contact_information' . '_' . $locale);
                $landingPage->translateOrNew($locale)->location = $request->get('location' . '_' . $locale);
                $landingPage->translateOrNew($locale)->location_value = $request->get('location_value' . '_' . $locale);
                $landingPage->translateOrNew($locale)->mobile = $request->get('mobile' . '_' . $locale);
                $landingPage->translateOrNew($locale)->full_name = $request->get('full_name' . '_' . $locale);
                $landingPage->translateOrNew($locale)->send = $request->get('send' . '_' . $locale);
                $landingPage->translateOrNew($locale)->copy_write = $request->get('copy_write' . '_' . $locale);
                $landingPage->translateOrNew($locale)->contact_form = $request->get('contact_form' . '_' . $locale);
                $landingPage->translateOrNew($locale)->email = $request->get('email' . '_' . $locale);
                $landingPage->translateOrNew($locale)->write_your_message = $request->get('write_your_message' . '_' . $locale);
                $landingPage->translateOrNew($locale)->how_works_description = $request->get('how_works_description' . '_' . $locale);
                $landingPage->translateOrNew($locale)->google_play = $request->get('google_play' . '_' . $locale);
                $landingPage->translateOrNew($locale)->app_store = $request->get('app_store' . '_' . $locale);


            }
            $landingPage->email_value = $request['email_value'];
            $landingPage->mobile_value = $request['mobile_value'];
            $landingPage->phone_value = $request['phone_value'];

            if ($request['logo'] != null) {
                $image = $request->file('logo');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->logo = $image_name;
            }

            if ($request['home_image'] != null) {
                $image = $request->file('home_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->home_image = $image_name;
            }

            if ($request['about_image'] != null) {
                $image = $request->file('about_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->about_image = $image_name;
            }


            if ($request['how_it_works_image'] != null) {
                $image = $request->file('how_it_works_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->how_it_works_image = $image_name;
            }


            if ($request['location_image'] != null) {
                $image = $request->file('location_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->location_image = $image_name;
            }

            if ($request['email_image'] != null) {
                $image = $request->file('email_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->email_image = $image_name;
            }


            if ($request['mobile_image'] != null) {
                $image = $request->file('mobile_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->mobile_image = $image_name;
            }


            if ($request['phone_image'] != null) {
                $image = $request->file('phone_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->phone_image = $image_name;
            }


            if ($request['full_name_image'] != null) {
                $image = $request->file('full_name_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->full_name_image = $image_name;
            }


            if ($request['like_image'] != null) {
                $image = $request->file('like_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->like_image = $image_name;
            }


            if ($request['communication_image'] != null) {
                $image = $request->file('communication_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->communication_image = $image_name;
            }


            if ($request['advertising_image'] != null) {
                $image = $request->file('advertising_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->advertising_image = $image_name;
            }


            if ($request['users_image'] != null) {
                $image = $request->file('users_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->users_image = $image_name;
            }


            if ($request['user_image'] != null) {
                $image = $request->file('user_image');
                $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
                $image->move(public_path('/landing_page/images/'), $image_name);
                $landingPage->user_image = $image_name;
            }


            $landingPage->save();
            return redirect('admin/dashboard/home/' . app()->getLocale());
        }else{
            return redirect()->back();
        }
    }



    public function changeStatus($model,Request $request)
    {
        $role = "";
        if($model == "admins") $role = 'App\Admin';
        if($model == "users") $role = 'App\User';
        if($model == "promotions") $role = 'App\Models\PromotionCode';

        if($model == "owners") $role = 'App\User';
        if($model == "categories") $role = 'App\Models\Category';
        if($model == "eventCategories") $role = 'App\Models\EventCategory';
        if($model == "products") $role = 'App\Models\ecommerce\Product';
        if($model == "ads") $role = 'App\Models\Ad';
        if($model == "cities") $role = 'App\Models\City';
        if($model == "giftcards") $role = 'App\Models\Giftcard';
        if($model == "pages") $role = 'App\Models\Page';
        if($model == "questions") $role = 'App\Models\Question';
        if($model == "additions") $role = 'App\Models\Addition';
        if($model == "notifications") $role = 'App\Models\Notification';
        if($model == "customerComments") $role = 'App\Models\CustomerComment';

        if($role !=""){
            if ($request->action == 'delete') {
                $role::query()->whereIn('id', $request->IDsArray)->delete();
            }
            else {
                if($request->action) {
                    $role::query()->whereIn('id', $request->IDsArray)->update(['status' => $request->action]);
                }
            }

            return $request->action;
        }
        return false;


    }

}
