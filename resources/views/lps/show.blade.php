@extends('layouts.app')

@section('content')

    <a href="/Lps" class="btn btn-default">go back</a>
    <h1>{{$lp->artist_id}}</h1>
    <h1>{{$lp->name}}</h1>
    <p>{{$lp->description}}</p>
    <hr>
    <a href="/Lps/{{$lp->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['LpsController@destroy', $lp->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}  
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}} 
    {!! Form::close() !!}
@endsection