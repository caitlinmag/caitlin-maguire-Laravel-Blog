<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function index(){
        $data['articles'] = Article::orderBy('id')->paginate(10);
        return view('articles.index', $data);
    }

    public function create(){
        return view('articles.create');
    }


    //search function
    public function search(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::where('title', 'like', '%' .$query . "%")->get();

        return view('articles.search');
    }

}
