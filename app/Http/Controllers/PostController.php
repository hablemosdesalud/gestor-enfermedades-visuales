<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use altavisionBlog2\Post;
use altavisionBlog2\App;
use altavisionBlog2\Menu;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
  }
    public function index(Request $request)
    {
      $posts=Post::filterByDisease($request->disease)->filterByTitle($request->title)->orderBy('id', 'ASC')->get();
      $apps=App::lists('disease','id');
      return view('posts.create',['apps'=>$apps , 'posts'=>$posts]);
    }
    public function store(Request $request)
    {
      if ($request->post_id == "Ninguno") {
        Post::create([
          'app_id'=>$request->app_id,
          'menu_id'=>$request->menu_id,
          'title'=>$request->title,
          'content'=>$request->content,
          'state'=>$request->state,
        ]);
      }else{
        Post::create([
          'app_id'=>$request->app_id,
          'menu_id'=>$request->menu_id,
          'post_id'=>$request->post_id,
          'title'=>$request->title,
          'content'=>$request->content,
          'state'=>$request->state,
        ]);
      }
      return redirect('posts');
    }
    public function show($menu ,$slug)
    {
      $posts=Post::where('state', 'published')->get();
      $app=App::where('id', env('DISEASE'))->firstOrFail();
      $menus=Menu::where('app_id', env('DISEASE'))->get();
      $post = Post:: where('slug','=', $slug)->firstOrFail();
      return view('posts.view',['post'=>$post , 'app'=>$app ,'menus'=>$menus ,'posts'=>$posts]);
    }
    public function edit($id)
    {
      $posts=Post::all();
      $apps=App::lists('disease','id');
      $post=Post::find($id);
      return view('posts.edit',['post'=>$post, 'apps'=>$apps , 'posts'=>$posts]);
    }
    public function update(Request $request, $id)
    {
      $post=Post::find($id);
      if($request->post_id == "Ninguno") {
        $post->fill([
          'app_id'=>$request->app_id,
          'menu_id'=>$request->menu_id,
          'post_id'=>NULL,
          'title'=>$request->title,
          'content'=>$request->content,
          'state'=>$request->state,
        ]);
      }else{
        $post->fill([
          'app_id'=>$request->app_id,
          'menu_id'=>$request->menu_id,
          'post_id'=>$request->post_id,
          'title'=>$request->title,
          'content'=>$request->content,
          'state'=>$request->state,
        ]);
      }
      $post->save();
      return redirect('posts');
    }
    public function destroy($id)
    {
      $post=Post::find($id);
      $post->delete();
      return redirect('posts');
    }
    public function upgrade($id){
      $post=Post::find($id);
      $post->favourite=true;
      $post->save();
      return redirect('posts');
    }
    public function downgrade($id){
      $post=Post::find($id);
      $post->favourite=false;
      $post->save();
      return redirect('posts');
    }
}
