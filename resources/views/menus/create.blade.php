@extends('layouts.apps')
@section('form')
  {!!Form::open(['route'=>'menus.store','method'=>'POST' , 'class'=>'formulario'])!!}
  <h1 class="text-center">AGREGAR MENU</h1>
  @include('menus.forms.fields')
  <div class="form-group">
    {!!Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])!!}
  </div>
  {!!Form::close()!!}
@endsection
@section('list')
  @include('menus.list')
@endsection
