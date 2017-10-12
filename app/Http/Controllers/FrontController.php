<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;

use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
      return view('index');
    }
}
