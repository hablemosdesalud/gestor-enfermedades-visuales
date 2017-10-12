<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use altavisionBlog2\App;
use altavisionBlog2\Menu;
use altavisionBlog2\Post;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class MenuController extends Controller
{
      public function __construct(){
      $this->middleware('auth');
    }
    public function index()
    {
      $apps=App::lists('disease','id');
      $menus=Menu::all();
      return view('menus.create',['menus'=>$menus, 'apps'=>$apps]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
      Menu::create($request->all());
      return redirect('menus');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
      $apps=App::lists('disease','id');
      $menus=Menu::all();
      $menu=Menu::find($id);
      return view('menus.edit',['menu'=>$menu, 'menus'=>$menus , 'apps'=>$apps]);
    }
    public function update(Request $request, $id)
    {
      $menu = Menu::find($id);
      $menu->slug = null;
      $menu->fill($request->all());
      $menu->save();
      flash('Actualizado satisfactoriamente', 'success');
      return redirect('menus');
    }
    public function destroy($id)
    {
      $menu=Menu::find($id);
      $menu->delete();
      flash('Usuario eliminado satisfactoriamente', 'success');
      return redirect('menus');
    }
    public function getAllPosts(Request $request, $id){
      if ($request->ajax()) {
        $allposts=Post::allposts($id);
        return response()->json($allposts);
      }
    }
    public function upgrade($id){
      $menu=Menu::find($id);
      $menu->favourite=true;
      $menu->save();
      return redirect('menus');
    }
    public function downgrade($id){
      $menu=Menu::find($id);
      $menu->favourite=false;
      $menu->save();
      return redirect('menus');
    }
}
