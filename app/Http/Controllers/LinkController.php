<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use altavisionBlog2\App;
use altavisionBlog2\Link;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class LinkController extends Controller
{
      public function __construct(){
      $this->middleware('auth');
    }
    public function index()
    {
      $links=Link::all();
      $apps=App::lists('disease','id');
      return view('links.create',['apps'=>$apps,'links'=>$links]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
      Link::create($request->all());
      return redirect('links');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
      $apps=App::lists('disease','id');
      $link=Link::find($id);
      return view('links.edit',['link'=>$link,'apps'=>$apps]);
    }
    public function update(Request $request, $id)
    {
      $link=Link::find($id);
      $link->fill($request->all());
      $link->save();
      return redirect('links');
    }
    public function destroy($id)
    {
      $link=Link::find($id);
      $link->delete();
      return redirect('links');
    }
}
