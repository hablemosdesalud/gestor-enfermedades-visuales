<?php

namespace altavisionBlog2;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
  protected $table="links";
  protected $fillable=['app_id','title','description','miniature','post'];
}
