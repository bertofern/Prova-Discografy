@extends('layouts.app')

@section('content')

    <h1>Artists</h1>
    @if(count($artists)>0)
        @foreach ($artists as $artist)
        <div class="well">
            <h3><a href="/Artists/{{$artist->id}}">{{$artist->name}}</a></h3>
            <p>{{$artist->description}}</p>
        </div>    
        @endforeach
    
    @else
        <p>No Artists found</p>
    @endif

@endsection