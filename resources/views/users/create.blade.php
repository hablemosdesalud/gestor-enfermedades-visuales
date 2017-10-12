@extends('layouts.apps')
@section('form')
  {!!Form::open(['route'=>'users.store','method'=>'POST' , 'class'=>'formulario'])!!}
    <h1 class="text-center">AGREGAR USUARIO</h1>
    @include('users.forms.fields')
    <div class="form-group">
      {!!Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])!!}
    </div>
  {!!Form::close()!!}
@endsection
@section('list')
  @include('users.list')
@endsection
