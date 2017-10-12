@extends('layouts.apps')
@section('form')
  @include('requests')
  <h1 class="text-center">ACTUALIZAR MENU</h1>
  {!!Form::model($menu,['route'=>['menus.update', $menu->id], 'method'=>'PUT', 'class'=>'formulario'])!!}
    @include('menus.forms.fields')
    <div class="form-group">
      {!!Form::submit('Actualizar', ['class'=>'btn btn-success pull-right'])!!}
    </div>
  {!!Form::close()!!}
@endsection
@section('list')
  @include('menus.list')
@endsection
