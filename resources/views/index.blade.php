@extends('layouts.apps')
@section('form')
  {!!Form::open(['route'=>'log.store','method'=>'POST' , 'class'=>'formulario'])!!}
    <h1 class="text-center">INGRESAR</h1>
    <div class="form-group">
      {!!Form::label('Correo electrónico')!!}
      {!!Form::email('email', null ,['class'=>'form-control' , 'placeholder'=>'Favor ingrese un correo electrónico'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('Contraseña')!!}
      {!!Form::password('password' , ['class'=>'form-control', 'placeholder'=>'Favor ingrese una contraseña'])!!}
    </div>
    <div class="form-group">
      {!!Form::submit('Ingresar', ['class'=>'btn btn-success pull-right'])!!}
    </div>
  {!!Form::close()!!}
@endsection
