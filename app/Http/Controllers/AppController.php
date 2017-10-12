<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use altavisionBlog2\App;
use altavisionBlog2\Menu;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class AppController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
  }
  public function index()
  {
    $apps=App::all();
    return view('apps.create',['apps'=>$apps]);
  }
  public function create()
  {

  }
  public function store(Request $request)
  {
     App::create([
       'description'=>$request->description,
       'keywords'=>$request->keywords,
       'prefix'=>$request->prefix .' '.$request->disease,
       'disease'=>$request->disease,
       'theme'=>$request->theme,
       'header_home'=>$request->header_home,
       'header_internal'=>$request->header_internal,
     ]);
     flash('Instalación creada satisfactoriamente', 'success');
     return Redirect('apps');
  }
  public function show($id)
  {
      //
  }
  public function edit($id)
  {
    $apps=App::all();
    $app=App::find($id);
    return view('apps.edit',['app'=>$app, 'apps'=>$apps]);
  }
  public function update(Request $request, $id)
  {
    $app = App::find($id);
    $app->slug = null;
    $app->fill($request->all());
    $app->save();
    flash('Actualizado satisfactoriamente', 'success');
    return redirect('apps');
  }
  public function destroy($id)
  {
    $app=App::find($id);
    \Storage::delete($app->header_home);
    \Storage::delete($app->header_internal);
    $app->delete();
    flash('Usuario eliminado satisfactoriamente', 'success');
    return redirect('apps');
  }
  public function getAllMenus(Request $request, $id){
    if ($request->ajax()) {
      $allmenus=Menu::allmenus($id);
      return response()->json($allmenus);
    }
  }
}
