<div class="form-group">
  {!!Form::text('disease', null ,['class'=>'form-control' , 'placeholder'=>'Enfermedad'])!!}
</div>
<div class="form-group">
  {!!Form::text('prefix', null , ['class'=>'form-control' , 'placeholder'=>'Prefijo'])!!}
</div>
<div class="form-group">
  {!!Form::textarea('description', null , ['class'=>'form-control' , 'placeholder'=>'Descripción del Blog para SEO máximo 150 caracteres', 'maxlength'=>'150', 'rows'=>'2'])!!}
</div>
<div class="form-group">
  {!!Form::textarea('keywords', null , ['class'=>'form-control' , 'placeholder'=>'Agregar máximo 10 keywords', 'maxlength'=>'150', 'rows'=>'2'])!!}
</div>
<div class="form-group">
  {!!Form::text('theme', null ,['class'=>'form-control' , 'placeholder'=>'Tema'])!!}
</div>
<div class="form-group">
  <label for="">Header del home</label>
  {!!Form::file('header_home',['class'=>'form-control'])!!}
</div>
<div class="form-group">
  <label for="">Header interna</label>
  {!!Form::file('header_internal',['class'=>'form-control'])!!}
</div>
