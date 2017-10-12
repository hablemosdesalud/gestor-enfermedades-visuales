@extends('layouts.apps')
@section('form')
  <h1 class="text-center">ACTUALIZAR USUARIO</h1>
  {!!Form::model($user,['route'=>['users.update', $user->id], 'method'=>'PUT', 'class'=>'formulario'])!!}
    @include('users.forms.fields')
    <div class="form-group">
      {!!Form::submit('Actualizar usuario', ['class'=>'btn btn-success pull-right'])!!}
    </div>
  {!!Form::close()!!}
@endsection
@section('list')
  @include('users.list')
@endsection
