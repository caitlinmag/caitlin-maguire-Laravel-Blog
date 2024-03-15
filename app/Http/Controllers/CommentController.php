<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
   /**
    *  Display comments in the comments.index file
    */

     public function index(){
        return view('comments.index')
         ->with('comments', Comment::orderBy('updated_at', 'DESC')->get());
     }
     
    /**
    * Create the comments
    */
    public function create(){
        return view('comments.create');
    }

    /**
     * Store comments
     * 
     */
    public function store(Request $request){
        $comment = new Comment();
        $comment->title = $request->title;
        $comment->comment_body = $request->comment_body;
        $comment->save();

        return redirect()->route('comments.index')
        ->with('success', 'Your comment has been created.');
    }
}