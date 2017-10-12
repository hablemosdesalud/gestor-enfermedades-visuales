<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class LogController extends Controller
{
    public function store(Request $request)
    {
      if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
        return redirect('apps');
      }
      return redirect('/');
    }
}
