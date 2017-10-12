@extends('layouts.apps')
@section('form')
    {!!Form::open(['route'=>'news.store','method'=>'POST' , 'class'=>'formulario', 'files'=>true])!!}
    <h1 class="text-center">AGREGAR NOTICIA</h1>
    @include('news.forms.fields')
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
@endsection
@section('list')
  @include('news.list')
@endsection
