<?php

namespace altavisionBlog2;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
  use Sluggable;
  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'title'
          ]
      ];
  }
  protected $table="posts";
  protected $fillable =['app_id','menu_id', 'post_id', 'state' ,'title','slug','content'];

  public static function allposts($id){
    return Post::where('menu_id','=', $id)->get();
  }
  public function posts(){
    return $this->hasMany('altavisionBlog2\Post','post_id');
  }
  public function post(){
    return $this->belongsTo('altavisionBlog2\Post','post_id');
  }
  public function menu(){
    return $this->belongsTo('altavisionBlog2\Menu');
  }
  public function app(){
    return $this->belongsTo('altavisionBlog2\App');
  }
  public function scopeFilterByDisease($query, $disease){
    return $query->where('app_id', 'LIKE', '%'.$disease.'%');
  }
  public function scopeFilterByTitle($query, $title){
    return $query->where('title', 'LIKE', '%'.$title.'%');
  }
}
