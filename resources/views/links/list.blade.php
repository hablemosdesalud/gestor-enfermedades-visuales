@if (!empty($links))
  <h1 class="text-center">LINKS REGISTRADOS</h1>
  <table class="table">
    <thead>
      <th>Titulo</th>
      <th>Acciones</th>
    </thead>
    @foreach ($links as $link)
      <tbody>
        <td>{{$link->title}}</td>
        <td>
          {!!Form::open(['route'=>['links.destroy',$link->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              <a href="{{ route('links.edit', $link->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
            </div>
          {!!Form::close()!!}
        </td>
      </tbody>
    @endforeach
  </table>
@endif