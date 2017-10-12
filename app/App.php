<?php

namespace altavisionBlog2;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class App extends Model
{
  use Sluggable;
  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'disease'
          ]
      ];
  }
  protected $table='apps';
  protected $fillable = ['description','prefix','disease','theme','header_home','header_internal','keywords','slug'];
  public function setHeaderHomeAttribute($route){
    if (!empty($route)) {
      $new_name=$route->getClientOriginalName();
      $this->attributes['header_home']= $new_name;
      \Storage::disk('local')->put($new_name,\File::get($route));
    }
  }
  public function setHeaderInternalAttribute($route){
    if (!empty($route)) {
      $new_name=$route->getClientOriginalName();
      $this->attributes['header_internal']= $new_name;
      \Storage::disk('local')->put($new_name,\File::get($route));
    }
  }
  public function menus(){
    return $this->hasMany('altavisionBlog2\Menu');
  }
  public function news(){
    return $this->hasMany('altavisionBlog2\News');
  }
  public function posts(){
    return $this->hasMany('altavisionBlog2\Post');
  }

}
