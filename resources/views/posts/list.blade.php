@if (!empty($posts))
  <h1 class="text-center">POSTS REGISTRADOS</h1>
  <div class="form-group">
    {!!Form::open(['route'=>'posts.index', 'method'=>'GET', 'class'=>'navbar-form'])!!}
      <div class="form-group">
        {!!Form::select('disease', $apps , null , ['class'=>'form-control' , 'placeholder'=>'Filtrar por enfermedad'])!!}
      </div>
      <div class="form-group">
        {!! Form::button('<span class="glyphicon glyphicon-filter"></span>', ['type' => 'submit', 'class'=>'btn btn-info']) !!}
      </div>
    {!!Form::close()!!}
    {!!Form::open(['route'=>'posts.index', 'method'=>'GET', 'class'=>'navbar-form'])!!}
      <div class="form-group">
        {!!Form::text('title' , null , ['class'=>'form-control', 'placeholder'=>'Buscar post'])!!}
      </div>
      <div class="form-group">
        {!! Form::button('<span class="glyphicon glyphicon-filter"></span>', ['type' => 'submit', 'class'=>'btn btn-info']) !!}
      </div>
    {!!Form::close()!!}
  </div>
  <table class="table">
    <thead>
      <th>Menú</th>
      <th>Enfermedad</th>
      <th>Acciones</th>
    </thead>
    @foreach ($posts as $post)
      <tbody>
        <td>{{$post->title}}</td>
        <td>{{$post->app->disease}}</td>
        <td>
          {!!Form::open(['route'=>['posts.destroy',$post->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              @if ($post->favourite==false)
                <a href="{{ url('posts/upgrade', $post->id) }}"><i class="btn btn-default glyphicon glyphicon-star"></i></a>
              @else
                <a href="{{ url('posts/downgrade', $post->id) }}"><i class="btn btn-warning glyphicon glyphicon-star"></i></a>
              @endif
              <a href="{{ route('posts.edit', $post->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
            </div>
          {!!Form::close()!!}
        </td>
      </tbody>
    @endforeach
  </table>
@endif
