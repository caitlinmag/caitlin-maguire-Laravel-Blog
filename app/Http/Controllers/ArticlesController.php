<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //search function
    public function search(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::where('title', 'like', '%' .$query . "%")->get();

        return view('articles.search');
    }
}
