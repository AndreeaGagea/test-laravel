<?php

namespace App\Http\Controllers;


use App\article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use Request;
use Request;
class ArticlesController extends Controller
{
    public function index(){
		$articles=article::all();
		return view("articles.index",compact('articles'));
	}
	public function create(){
		return view("articles.create");
	}
	public function show($id){
		$article=Article::find($id);
		//return $id;
		//return in json
	//return $article;
	return view("articles.show",compact('article'));
	}
	public function store(){
		//luam articole din formular foloind fatada reguest
		$input = Request::all();
		//in mod automat vom sta publish_at
	//	$input['publish_at']=Carbon::now();
//adaug in baza de date fiecare
Article::create($input);
//redirectare la pag cu toare articolele
		return redirect('articles');
	}
public function update($id)
{
	$article = Article::find($id);
	$article->update(Request::all());
	//Article::update($input);
     //     $article->title = $article::get('title');
      //  $article->body = $article::get('body');
          //  $article->save();

//$article=Request::all();
//$article=Article::find($id);
//$article->update($article);
return redirect('articles');
}

 /*public function destroy($id)
{$article = Article::find($id);
	$article->delete($article);
 //  Article::find($id)->delete();
   return redirect('articles');
}
*/
 public function destroy($id)
    {
        // delete
        $article = Article::find($id);
        $article->delete();

        // redirect
       // Session::flash('message', 'Successfully deleted the article!');
        return redirect('articles');
    }
}
