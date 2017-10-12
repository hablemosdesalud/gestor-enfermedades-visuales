<?php

namespace altavisionBlog2;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
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
  protected $table="news";
  protected $fillable = ['app_id','title','slug','description','miniature','post','pdf'];

  public function setMiniatureAttribute($route){
    if (!empty($route)) {
      $new_name=$route->getClientOriginalName();
      $this->attributes['miniature']= $new_name;
      \Storage::disk('miniatures')->put($new_name,\File::get($route));
    }
  }
  public function setPdfAttribute($route){
    if (!empty($route)) {
      $new_name=$route->getClientOriginalName();
      $this->attributes['pdf']= $new_name;
      \Storage::disk('pdfs')->put($new_name,\File::get($route));
    }
  }
  public function app(){
    return $this->belongsTo('altavisionBlog2\App');
  }
}
