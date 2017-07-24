<?php

namespace App\Http\Controllers;
use App\Article;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    //
    public function index(){
    	$articles=Article::latest()->published()->get();
    	return view('articles.index',compact('articles'));
    }

    public function show($id){
    	$article=Article::findOrFail($id);
        dd($article->published_at->diffForHumans());
    	return view('articles.show',compact('article'));
    }

    public function create(){
    	return view('articles.create');
    }

    public function store(Request $request){
        //接受post过来的数据
        //存入数据库
        //重定向
        $this->validate($request,['title'=>'required','content'=>'required']);
        Article::create($request->all());
        return redirect('/articles');
    }

    public function edit($id){
        $article=Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update(Requests\CreateArticleRequest $request,$id){
        $article=Article::findOrFail($id);
        $article->update($request->all());

        return redirect('/articles');
    }
}
