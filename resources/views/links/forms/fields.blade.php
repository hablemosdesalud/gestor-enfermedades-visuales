<div class="form-group">
  {!!Form::select('app_id', $apps, null, ['class'=>'form-control' , 'placeholder'=>'Agregar este enlace a'])!!}
</div>
<div class="form-group">
  {!!Form::text('title', null ,['class'=>'form-control' , 'placeholder'=>'Título'])!!}
</div>
<div class="form-group">
  {!!Form::textarea('description', null , ['class'=>'form-control' , 'placeholder'=>'Descripción de la noticia', 'maxlength'=>'150', 'rows'=>'2'])!!}
</div>
<div class="form-group">
  {!!Form::text('miniature', null ,['class'=>'form-control' , 'placeholder'=>'Miniatura'])!!}
</div>
<div class="form-group">
  {!!Form::text('post', null ,['class'=>'form-control' , 'placeholder'=>'Post'])!!}
</div>
