<?php

namespace App\Http\Controllers;

use App\Article;
use http\Env\Response;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $articles = Article::all();
      foreach ($articles as $article){
          echo $article->title . "<br>";
          echo $article->category_id . "br<>";
          echo $article->author . "<br>";
          echo $article->content . "<br>";
      }

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

      $article = new Article();

      $article->title = $request->title;
      $article->author = $request->author;
      $article->content = $request->content;
      $article->publish_date = $request->publish_date;
      $article->category_id = $request->category_id;
      $article->user_id = $request->user_id;
      $article->save();
      $article->id = $article->id;
//      $article->photos($article->id)->path = $request->photo;
       $article->photo = $article->photos($article->id)->create(['path'=>$request->photo])  ;
//      $article->photos()->imageable_id = $article->id;
      $article->save();

      return Response()->json($article);


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

  public function search ($param){

      $article = Article::where('title','like',"%" .$param."%")->
      orwhere('content','like',"%" .$param."%")->
      orwhere('author','like',"%" .$param."%")->get();

      return Response()->json($article);

  }


}

?>
