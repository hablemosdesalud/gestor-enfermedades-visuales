@if (!empty($apps))
  <h1 class="text-center">BLOGS INSTALADOS</h1>
  <table>
  <thead>
    <th>id</th>
    <th>blog</th>
    <th>Acciones</th>
  </thead>
  @foreach ($apps as $app)
    <tbody>
      <td>{{$app->id}}</td>
      <td>{{$app->slug}}</td>
      <td>
        {!!Form::open(['route'=>['apps.destroy',$app->id], 'method'=>'DELETE'])!!}
        <div class="form-group">
          <a href="{{ route('apps.edit', $app->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
          {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
        </div>
        {!!Form::close()!!}
      </td>
    </tbody>
  @endforeach
</table>
@endif
