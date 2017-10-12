@extends('layouts.new')
@section('section')
  <div class="form-group text-right">
    <a href="{{URL::to('noticias/pdfs')}}/{{$new->pdf}}" class="btn btn-primary" target="_blank">Imprimir</a>
  </div>
  <h1>{!!$new->title!!}</h1>
  <p>{!!$new->post!!}</p>
@endsection
