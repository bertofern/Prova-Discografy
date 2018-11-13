@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Lps</h1>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
    
                    @if(count($lps)>0)
                        @foreach ($lps as $lp)
        
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                @foreach ($artists as $artist)
                                    @if($lp->artist_id === $artist->id)
                                        <h3 class="text-center"><a href="/Artists/{{$lp->artist_id}}">{{$artist->name}}</a></h3>
                                    @endif  
                                @endforeach
                                <h3 class="text-center"><a href="/Lps/{{$lp->id}}">{{$lp->name}}</a></h3>
                                <div class="card-body">
                                    <p class="card-text">{{$lp->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach       
                    @else
                        <p>No Artists found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection