@extends('layouts.app')

@section('content')

    <a href="/Artists" class="btn btn-default">go back</a>
    <h1>{{$artist->name}}</h1>
    <p>{{$artist->description}}</p>
    <hr>
    <a href="/Artists/{{$artist->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['ArtistsController@destroy', $artist->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}  
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}} 
    {!! Form::close() !!}
@endsection