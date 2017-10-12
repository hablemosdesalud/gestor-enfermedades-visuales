@if (!empty($menus))
  <h1 class="text-center">MENUS REGISTRADOS</h1>
  <table class="table">
    <thead>
      <th>Menú</th>
      <th>Enfermedad</th>
      <th>Acciones</th>
    </thead>
    @foreach ($menus as $menu)
      <tbody>
        <td>{{$menu->name}}</td>
        <td>{{$menu->app->disease}}</td>
        <td>
          {!!Form::open(['route'=>['menus.destroy',$menu->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              @if ($menu->favourite==false)
                <a href="{{ url('menus/upgrade', $menu->id) }}"><i class="btn btn-default glyphicon glyphicon-star"></i></a>
              @else
                <a href="{{ url('menus/downgrade', $menu->id) }}"><i class="btn btn-warning glyphicon glyphicon-star"></i></a>
              @endif
              <a href="{{ route('menus.edit', $menu->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
            </div>
          {!!Form::close()!!}
        </td>
      </tbody>
    @endforeach
  </table>
@endif
