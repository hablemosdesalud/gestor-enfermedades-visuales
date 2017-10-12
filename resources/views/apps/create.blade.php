@extends('layouts.apps')
@section('form')
    {!!Form::open(['route'=>'apps.store','method'=>'POST' , 'class'=>'formulario', 'files'=>true])!!}
    <h1 class="text-center">INSTALAR BLOG</h1>
    @include('apps.forms.fields')
    <div class="form-group">
      {!!Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])!!}
    </div>
    {!!Form::close()!!}
@endsection
@section('list')
  @include('apps.list')
@endsection
