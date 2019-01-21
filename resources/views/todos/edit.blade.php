@extends('layouts.app')

@section('content')

<span>Edit Todo</span>

{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method'=> 'POST']) !!}
    {{ Form::bsText('text', $todo->text) }}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::hidden('_method', 'PUT') }}
    <div class="row">
      {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary col-xs-1']) }}
      <a class="col-xs-1 btn btn-secondary" href="/todo/{{$todo->id}}">Go Back</a>
    </div>

{!! Form::close() !!}
</br>

@endsection
