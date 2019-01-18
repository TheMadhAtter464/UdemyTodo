@extends('layouts.app')

@section('content')
  <h1>Todos</h1>
  @if(count($todos) > 0)
    @foreach($todos as $todo)
    <div class="card card-body bg-light">
      <h3>{{$todo->text}}</h3>
      <div class="row">
        <span class="badge badge-danger col-xs-1">{{$todo->due}}</span>
      </div>
    </div></br>
    @endforeach
  @endif
@endsection
