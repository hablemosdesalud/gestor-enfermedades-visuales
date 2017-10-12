@extends('layouts.apps')
@section('form')
  <h1 class="text-center">ACTUALIZAR MENU</h1>
  {!!Form::model($post,['route'=>['posts.update', $post->id], 'method'=>'PUT', 'class'=>'formulario'])!!}
    @include('posts.forms.fields')
    <div class="form-group">
      {!!Form::submit('Actualizar', ['class'=>'btn btn-success pull-right'])!!}
    </div>
  {!!Form::close()!!}
  <script type="text/javascript">
      CKEDITOR.replace( 'txa', {
      filebrowserBrowseUrl: '../../plugins/ckfinder/ckfinder.html',
      filebrowserUploadUrl: '../../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    } );
  </script>
  @include('posts.scripts')
@endsection
@section('list')
  @include('posts.list')
@endsection
