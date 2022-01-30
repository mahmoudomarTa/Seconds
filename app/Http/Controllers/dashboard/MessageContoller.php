<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers;
use App\Models\landing_page\Message;
use Illuminate\Http\Request;

class MessageContoller extends Controller
{
    public function index($local)
    {
        if (Helpers::can('messages')) {
            app()->setLocale($local);
            app()->setLocale($local);
            $messages = Message::all();
            return view('admin.dashboard.message.index')->with(compact('messages'));
        }else{
            app()->setLocale($local);
            return view('admin.dashboard.no_permission');
        }
    }


    function destroy($id){
        $state = Message::where('id',$id)->delete();
        return redirect()->back()->with('state',$state);
    }

}
