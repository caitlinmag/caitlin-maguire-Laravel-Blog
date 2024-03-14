<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    // public function store(Request $_REQUEST){
    //     if(Auth::check()){
    //         $validator = Validator::make($_REQUEST->all,[
    //             'comment_body' => 'required|string'
    //         ]);

    //         if($validator->fails){
    //             redirect()->back()->with('message', 'Please fill in the comment area.');
    //         }

    //         $post = Post::where('slug', $_REQUEST->post_slug)->where('status', '0')->first();
    //         if($post){
    //             Comment::create([
    //                 'post_id' => $post->id,
    //                 'user_id' => Auth::user->id,
    //                 'comment_body' => $_REQUEST-> comment_body
    //             ]);

    //         }else{
    //             redirect()->back()->with('message', 'No Post has been found.');
    //         }
    //     }
    //     else{
    //         redirect()->back()->with('message', 'Login first to comment');
    //     }
    // }
}
