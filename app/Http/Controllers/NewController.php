<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use altavisionBlog2\App;
use altavisionBlog2\News;
use altavisionBlog2\Post;
use altavisionBlog2\Menu;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class NewController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
  }
    public function index()
    {
      $news=News::all();
      $apps=App::lists('disease','id');
      return view('news.create',['apps'=>$apps ,'news'=>$news]);
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
      News::create($request->all());
      return redirect('news');
    }
    public function show($slug)
    {
      $posts=Post::where('state', 'published')->get();
      $app=App::where('id', env('DISEASE'))->firstOrFail();
      $menus=Menu::where('app_id', env('DISEASE'))->get();
      $new = News:: where('slug','=', $slug)->firstOrFail();
      return view('news.view',['new'=>$new , 'app'=>$app ,'menus'=>$menus ,'posts'=>$posts]);
    }
    public function edit($id)
    {
      $news=News::all();
      $new=News::find($id);
      $apps=App::lists('disease','id');
      return view('news.edit',['apps'=>$apps ,'new'=>$new,'news'=>$news]);
    }
    public function update(Request $request, $id)
    {
      $new=News::find($id);
      if ($request->miniature) {
        \Storage::disk('miniatures')->delete($new->miniature);
      }
      if ($request->pdf) {
        \Storage::disk('pdfs')->delete($new->pdf);
      }
      $new->slug = null;
      $new->fill($request->all());
      $new->save();
      return redirect('news');
    }
    public function destroy($id)
    {
      $new=News::find($id);
      \Storage::disk('miniatures')->delete($new->miniature);
      \Storage::disk('pdfs')->delete($new->pdf);
      $new->delete();
      return redirect('news');
    }
}
