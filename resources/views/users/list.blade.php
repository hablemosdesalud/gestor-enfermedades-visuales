@if (!empty($users))
  <h1 class="text-center">USARIOS REGISTRADOS</h1>
  <table class="table">
    <thead>
      <th>Usuario</th>
      <th>Email</th>
      <th>Acciones</th>
    </thead>
    @foreach ($users as $user)
      <tbody>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
          {!!Form::open(['route'=>['users.destroy',$user->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              <a href="{{ route('users.edit', $user->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
            </div>
          {!!Form::close()!!}
        </td>
      </tbody>
    @endforeach
  </table>
@endif
