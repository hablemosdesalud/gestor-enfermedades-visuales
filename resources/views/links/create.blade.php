@extends('layouts.apps')
@section('form')
  {!!Form::open(['route'=>'links.store','method'=>'POST' , 'class'=>'formulario'])!!}
  <h1 class="text-center">AGREGAR LINK EXTERNO</h1>
  @include('links.forms.fields')
  <div class="form-group">
    {!!Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])!!}
  </div>
  {!!Form::close()!!}
@endsection
@section('list')
  @include('links.list')
@endsection
