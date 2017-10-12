@extends('layouts.apps')
@section('form')
  {!!Form::open(['route'=>'posts.store','method'=>'POST' , 'class'=>'formulario'])!!}
  <h1 class="text-center">AGREGAR UN POST</h1>
  @include('posts.forms.fields')
  <div class="form-group">
    {!!Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])!!}
  </div>
  {!!Form::close()!!}
  <script type="text/javascript">
      CKEDITOR.replace( 'txa', {
      filebrowserBrowseUrl: 'plugins/ckfinder/ckfinder.html',
      filebrowserUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    } );
  </script>
  @include('posts.scripts')
@endsection
@section('list')
  @include('posts.list')
@endsection
