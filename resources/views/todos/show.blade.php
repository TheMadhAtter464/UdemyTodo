@extends('layouts.app')

@section('content')
<br>
<h1> {{$todo->text}}</h1>
<div class="row">
  <span class="badge badge-danger col-xs-1">{{$todo->due}}</span>
</div>
<hr>
  <p>{{$todo->body}}</p>
<hr>
<div class="row">

</div>
<br>
<div class="row">
  <a class="btn btn-secondary col-xs-1" href="/">Go Back</a>
  <a class="btn btn-warning col-xs-1" href="/todo/{{$todo->id}}/edit">Edit</a>
  {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method'=> 'POST', 'class' => 'col-xs-1']) !!}
      {{ Form::hidden('_method', 'DELETE') }}
      {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
</div>

<br>

@endsection
