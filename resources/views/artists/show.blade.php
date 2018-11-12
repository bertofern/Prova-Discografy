@extends('layouts.app')

@section('content')

    <a href="/Artists" class="btn btn-default">go back</a>
    <h1>{{$artist->name}}</h1>
    <p>{{$artist->description}}</p>

    <h1>{{$count}} Lps of {{$artist->name}}</h1>
    @if(count($lps)>0)
        @foreach ($lps as $lp)
        <div class="well">
            <h3><a href="/Lps/{{$lp->id}}">{{$lp->name}}</a></h3>
            <p>{{$lp->description}}</p>
        </div>    
        @endforeach
    
    @else
        <p>No Lps's found for this Artist</p>
    @endif


    <a class="btn btn-primary" href="/Lps/create/{{$artist->id}}">Create Lps</a>
    <a href="/Artists/{{$artist->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['ArtistsController@destroy', $artist->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}  
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}} 
    {!! Form::close() !!}
@endsection