<div class="form-group">
  {!!Form::select('app_id', $apps , null, ['class'=>'form-control' ,'id'=>'slc_app','placeholder'=>'Elija un blog'])!!}
</div>
<div class="form-group">
  {!!Form::select('menu_id', ['placeholder'=>'Menu'], null, ['class'=>'form-control' ,'id'=>'slc_menu'])!!}
</div>
<div class="form-group">
  {!!Form::select('post_id', ['placeholder'=>'Posts'] , null, ['class'=>'form-control' , 'placeholder'=>'Post al que pertenece' , 'id'=>'slc_post'])!!}
</div>
<div class="form-group">
  {!!Form::select('state', ['published'=>'Publicado' , 'draft'=>'Borrador'] , null, [ 'id'=>'slc_state','class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::text('title', null ,['class'=>'form-control' , 'placeholder'=>'Titulo aquí'])!!}
</div>
<div class="form-group">
  {!!Form::textarea('content', null ,['class'=>'form-control' , 'placeholder'=>'Contenido aquí' , 'id'=>'txa'])!!}
</div>
<div class="form-group">
  <p class="list-group-item-success">
    Después de agregar la imagen al editor click derecho->propiedades->avanzado-> en la caja de texto "Clases de hojas de estilo" escribir: min
  </p>
</div>
