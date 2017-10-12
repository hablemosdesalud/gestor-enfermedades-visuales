<div class="form-group">
  {!!Form::label('App')!!}
  {!!Form::select('app_id', $apps , null, ['class'=>'form-control' , 'placeholder'=>'Favor elija un blog'])!!}
</div>
<div class="form-group">
  {!!Form::text('name', null ,['class'=>'form-control' , 'placeholder'=>'Menu'])!!}
</div>
