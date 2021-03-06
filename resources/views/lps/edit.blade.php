@extends('layouts.app')

@section('content')

    <h1>Create Lps</h1>
    {!! Form::open(['action' => ['LpsController@update', $lp->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('artist_id', 'Artist_id')}}
            {{Form::text('artist_id', $lp->artist_id, ['class' => 'form-control', 'readonly','placeholder' => 'Artist_id'])}}
        </div>  
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $lp->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>    
        <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::text('description', $lp->description, [/*'id' => 'article-ckeditor',*/'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>  
        {{Form::hidden('_method', 'PUT')}}  
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} 
    {!! Form::close() !!}

@endsection