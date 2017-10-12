@extends('layouts.apps')
@section('form')
  <h1 class="text-center">Actualizar Instalador</h1>
  {!!Form::model($app,['route'=>['apps.update', $app->id], 'method'=>'PUT', 'class'=>'formulario' ,'files'=>true])!!}
    @include('apps.forms.fields')
    <div class="form-group">
      {!!Form::submit('Actualizar usuario', ['class'=>'btn btn-success pull-right'])!!}
    </div>
  {!!Form::close()!!}
@endsection
@section('list')
    @include('apps.list')
@endsection
