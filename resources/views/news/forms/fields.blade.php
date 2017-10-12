<div class="form-group">
  {!!Form::select('app_id', $apps, null, ['class'=>'form-control' , 'placeholder'=>'Elije un blog'])!!}
</div>
<div class="form-group">
  {!!Form::text('title', null ,['class'=>'form-control' , 'placeholder'=>'Título'])!!}
</div>
<div class="form-group">
  {!!Form::textarea('description', null , ['class'=>'form-control' , 'placeholder'=>'Descripción de la noticia máximo 256 caracteres', 'maxlength'=>'265', 'rows'=>'5s'])!!}
</div>
<div class="form-group">
  {!!Form::textarea('post', null , ['class'=>'form-control' , 'placeholder'=>'Contenido del post','id'=>'txa'])!!}
</div>
<div class="form-group">
  <label for="">Miniatura de la noticia</label>
  {!!Form::file('miniature',['class'=>'form-control'])!!}
</div>
<div class="form-group">
  <label for="">PDF</label>
  {!!Form::file('pdf',['class'=>'form-control'])!!}
</div>
