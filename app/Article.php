<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{


    protected $table = 'article';
    public $timestamps = true;

    protected $fillable =[
        'title',
        'author',
        'content',
        'publish_date',
        'category_id',

    ];

    public function photos($id) {

       $article = Article::find($id);
       $imageable_id = $article->id;

        return $this->morphMany('App\Models\Photo','imageable' );

    }
}
