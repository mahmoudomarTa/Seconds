<?php

namespace App\Http\Controllers\landing_page;

use App\Http\Controllers\Controller;
use App\Models\landing_page\Comment;
use App\Models\landing_page\Feature;
use App\Models\landing_page\LandingPage;
use App\Models\landing_page\Message;
use App\Models\landing_page\Twitter;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index($locale){
        app()->setLocale($locale);
        $landingPage = LandingPage::first();
        $features = Feature::all();
        $comments = Comment::all();
        return view('landing_page.index')->with(compact('landingPage','features','comments'));
    }



//   public function store(){
//       $landingPage = LandingPage::first();
//       $landingPage->translate('en')->likes='likes';
//       $landingPage->translate('ar')->likes='المعجبون';
//       echo $landingPage->save();
//
//
//   }

    public function storeMessage(Request $request){
        $roles = [
            'user_name' => 'required',
            'email'     => 'required',
            'message'=> 'required',
        ];

        if ($this->validate($request, $roles)){
            $user_name = $request['user_name'];
            $email = $request['email'];
            $message_text = $request['message'];

            $message = new Message();
            $message->user_name=$user_name;
            $message->email=$email;
            $message->message=$message_text;
            $message->save();
            return redirect()->back();
        }


        return redirect()->back();

    }

    public function twitter($local){
        $twitter = Twitter::first();
        app()->setLocale($local);
        return view('twitter')->with(compact('twitter'));
    }

}
