<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use altavisionBlog2\User;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class UserController extends Controller
{
      public function __construct(){
      $this->middleware('auth');
    }
    public function index()
     {
       $users= User::all();
        return view('users.create',['users'=>$users ]);
     }
     //////////////////////////////////////////////////////////////////
     public function create()
     {

     }
     ////////////////////////////////////////////////////////////////
     public function store(Request $request)
     {
       User::create($request->all());
       flash('Usuario creado satisfactoriamente', 'success');
       return redirect('users#contenido');
     }
     ////////////////////////////////////////////////////////////////
     public function show($id)
     {

     }
     ////////////////////////////////////////////////////////////////
     public function edit($id)
     {
       $user= User::find($id);
       $users= User::all();
       return view('users.edit', ['user'=>$user,'users'=>$users ]);
     }
     ////////////////////////////////////////////////////////////////
     public function update(Request $request, $id)
     {
       $user= User::find($id);
       $user->fill($request->all());
       $user->save();
       flash('Usuario actualizado satisfactoriamente', 'success');
       return redirect('users');
     }
     ////////////////////////////////////////////////////////////////
     public function destroy($id)
     {
       User::destroy($id);
       flash('Usuario eliminado satisfactoriamente', 'success');
       return redirect('users');
     }
}
