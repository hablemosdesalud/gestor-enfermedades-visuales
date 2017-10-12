@extends('layouts.apps')
@section('form')
  <h1 class="text-center">ACTUALIZAR LINK</h1>
  {!!Form::model($link,['route'=>['links.update', $link->id], 'method'=>'PUT', 'class'=>'formulario'])!!}
    @include('links.forms.fields')
    <div class="form-group">
      {!!Form::submit('Actualizar', ['class'=>'btn btn-success pull-right'])!!}
    </div>
  {!!Form::close()!!}
@endsection
@section('list')
  @include('links.list')
@endsection