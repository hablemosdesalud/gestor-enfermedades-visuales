@extends('layouts.apps')
@section('form')
  <h1 class="text-center">Actualizar Noticia</h1>
  {!!Form::model($new,['route'=>['news.update', $new->id], 'method'=>'PUT', 'class'=>'formulario' ,'files'=>true])!!}
    @include('news.forms.fields')
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
@endsection
@section('list')
    @include('news.list')
@endsection
