@extends('layouts.app')

@section('content')

    <h1>Lps</h1>
    @if(count($lps)>0)
        @foreach ($lps as $lp)
        <div class="well">
            <h3><a href="/Artists/{{$lp->artist_id}}">{{$lp->artist_id}}</a></h3>
            <h3><a href="/Lps/{{$lp->id}}">{{$lp->name}}</a></h3>
            <p>{{$lp->description}}</p>
        </div>    
        @endforeach
    
    @else
        <p>No Lps found</p>
    @endif

@endsection