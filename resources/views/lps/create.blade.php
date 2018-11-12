@extends('layouts.app')

@section('content')

    <h1>Create Lps</h1>
    {!! Form::open(['action' => 'LpsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('artist_id', 'Artist_id')}}
            {{Form::text('artist_id', $artist->id, ['class' => 'form-control', 'readonly', 'value' => $artist->id])}}
        </div>    
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