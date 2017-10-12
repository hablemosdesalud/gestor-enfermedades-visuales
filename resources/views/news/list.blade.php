@if (!empty($news))
  <h1 class="text-center">NOTICIAS</h1>
  <table>
  <thead>
    <th>Titulo</th>
    <th>Blog</th>
    <th>Acciones</th>
  </thead>
  @foreach ($news as $new)
    <tbody>
      <td>{{$new->title}}</td>
      <td>{{$new->app->disease}}</td>
      <td>
        {!!Form::open(['route'=>['news.destroy',$new->id], 'method'=>'DELETE'])!!}
        <div class="form-group">
          <a href="{{ route('news.edit', $new->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
          {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
        </div>
        {!!Form::close()!!}
      </td>
    </tbody>
  @endforeach
</table>
@endif
