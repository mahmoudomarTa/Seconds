<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers;
use App\Models\landing_page\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index($local)
    {
        if (Helpers::can('comments')) {
            app()->setLocale($local);
            $comments = Comment::all();
            return view('admin.dashboard.comment.index')->with(compact('comments'));
        }else{
            app()->setLocale($local);
            return view('admin.dashboard.no_permission');
        }
    }

    function create($local)
    {
        app()->setLocale($local);
        return view('admin.dashboard.comment.create');
    }

    function store(Request $request)
    {
        $comment_text = $request['comment_text'];
        $user_name = $request['user_name'];
        $rating = $request['rating'];
        $image = $request->file('image');
        $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
        $image->move(public_path('/dashboard/images/'), $image_name);


        $comment = new Comment();
        $comment->comment_text = $comment_text;
        $comment->user_name = $user_name;
        $comment->rating = $rating;
        $comment->image = $image_name;
        $comment->save();
        return redirect()->back();

    }


    function edit($local, $id)
    {
        app()->setLocale($local);
        $comment = Comment::where('id', $id)->first();
        return view('admin.dashboard.comment.edit')->with('comment', $comment);
    }

    function update(Request $request, $id)
    {
        $comment_text = $request['comment_text'];
        $user_name = $request['user_name'];
        $rating = $request['rating'];
        $image = $request->file('image');
        $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
        $image->move(public_path('/dashboard/images/'), $image_name);

        $comment = Comment::find($id);

        $comment->comment_text = $comment_text;
        $comment->user_name = $user_name;
        $comment->rating = $rating;
        $comment->image = $image_name;

        $comment->save();

        return redirect()->back();
    }

    function destroy($id)
    {
        $state = Comment::where('id', $id)->delete();
        return redirect()->back()->with('state', $state);
    }

}
