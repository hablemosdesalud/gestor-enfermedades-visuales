<?php

namespace altavisionBlog2;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Menu extends Model
{
  use Sluggable;
  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'name'
          ]
      ];
  }
  protected $table ="menus";
  protected $fillable =['name', 'slug' , 'app_id'];

  public function app(){
    return $this->belongsTo('altavisionBlog2\App');
  }
  public static function allmenus($id){
    return Menu::where('app_id','=', $id)->get();
  }
  public function posts(){
    return $this->hasMany('altavisionBlog2\Post');
  }
}
