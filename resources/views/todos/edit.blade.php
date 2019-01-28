@extends('layouts.app');

@section('content')

<h1>Edit Todo</h1>
<a href="/todo/{{$todo->id}}" class="btn btn-secondary">Go Back</a>
{!! Form::open(['action' => ['TodosController@update',$todo->id],'method' => 'POST']) !!}
    {{ Form::bsText('text',$todo->text)}}
    {{ Form::bsTextArea('body',$todo->body)}}
    {{ Form::bsText('due',$todo->due)}}
    {{ Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}

@endsection
