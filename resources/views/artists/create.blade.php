@extends('layouts.app')

@section('content')

    <h1>Create Artists</h1>
    {!! Form::open(['action' => 'ArtistsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control','placeholder' => 'Name'])}}
        </div>    
        <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::text('description', '', [/*'id' => 'article-ckeditor',*/'class' => 'form-control','placeholder' => 'Description'])}}
        </div>   
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} 
    {!! Form::close() !!}

@endsection