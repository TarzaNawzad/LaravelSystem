<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddsController extends Controller
{
    public function index()
    {
        return view('users.addusers');
    }
}


//namespace App\Http\Controllers;
//
//use App\Models\Article;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//
//class ArticleController extends Controller
//{
//    public function index()
//    {
//        //query builder
//        /*$articles = DB::table('articles')->get();
//        return view('Article.index',compact('articles'));*/
//
//        //model
//        $articles = Article::get();
//        return view('Article.index', compact('articles'));
//    }
//
//    public function add()
//    {
//        return view('article.add');
//    }
//
//    public function store(Request $request)
//    {
//        //return $request->all();
//        Article::create([
//            'title' => $request['title'],
//            'demo' => $request['demo'],
//            'text' => $request['text']
//        ]);
//        return redirect('/article/');
//    }
//
//    public function detail($id)
//    {
//        $article = Article::find($id);
//        return view('article.detail', compact('article'));
//    }
//
//    public function delete($id)
//    {
//        $article = Article::find($id);
//        $article->delete();
//        return redirect()->back();
//    }
//}

