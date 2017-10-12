<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INSTALAR BLOG</title>
    {!!Html::style('plugins/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::script('plugins/ckeditor/ckeditor.js')!!}
    <style media="screen">
      body{
        background-color: #e7e7e7;
      }
      .principal{
        background-color: #f2f2f2;
        min-height: 80vh;
        padding: 1em;
        border-radius: 15px;
        margin-top: 15px;
      }
      H1{
        font-family: "Calibri";
        margin-bottom: 1em;
      }
      table{
        width: 100%;
      }
      .container-fluid{
        background-color: rgba(94, 147, 201, 1);
        padding: 15px;
      }
      .nav a{
        color: white!important;
      }

      .nav span{
        font-size: 30px;
        margin-bottom: 15px;
        display: block;
      }
      .welcome{
        margin-top: 5em;
        color:#aaaaaa;
        font-size: 60px;
        font-weight: Calibri;
      }
      .nav>li>a:hover, .nav>li>a:focus {
          text-decoration: none;
          background-color: #30648a;
          transition: 1s;
      }
      .panel-list{
        max-height: 85vh;
        overflow: scroll;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
      <ul class="nav nav-justified nav-pills">
        <li><a href="{!!URL::to('apps')!!}" role="button"> <span class="glyphicon glyphicon-book"></span>Aplicaciones</a></li>
        <li><a href="{!!URL::to('menus')!!}" role="button"><span class="glyphicon glyphicon-th-large"></span>Menus</a></li>
        <li><a href="{!!URL::to('posts')!!}" role="button"><span class="glyphicon glyphicon-pencil"></span>Posts</a></li>
        <li><a href="{!!URL::to('news')!!}" role="button"><span class="glyphicon glyphicon-tags"></span>Noticias</a></li>
        <li><a href="{!!URL::to('links')!!}" role="button"><span class="glyphicon glyphicon-send"></span>Links</a></li>
        <li><a href="{!!URL::to('users')!!}" role="button"><span class="glyphicon glyphicon-user"></span>Usuarios</a></li>      </ul>
    </div>
    </div>
    <div class="container principal">
      <div class="row">
        <div class="col-xs-6">
          <div class="panel panel-default">
          <div class="panel-body">
            @yield('form')
          </div>
        </div>
        </div>
        <div class="col-xs-6">
          <div class="panel panel-default">
          <div class="panel-body panel-list">
            @yield('list')
          </div>
        </div>
        </div>
      </div>
      <div class="row">
        @yield('section')
      </div>
    </div>
  </body>
  {!!Html::script('js/jquery.min.js')!!}
  {!!Html::script('plugins/bootstrap/js/bootstrap.min.js')!!}
  {!!Html::script('js/dynamics-selects.js')!!}
</html>
