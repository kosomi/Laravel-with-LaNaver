@extends('layouts.app')

@section('content') 

<div class="container">
 <div>
  <h1>Stores Create</h1>
 </div>

    <div class="container"> 
        {!! Form::open(['url' =>'stores/add']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('memo', 'Memo:') !!}
                {!! Form::textarea('memo', null, ['class' => 'form-control']) !!}
            </div>  
            <div class="form-group">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('lat', 'Lat:') !!}
                {!! Form::text('lat', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('lng', 'Lng:') !!}
                {!! Form::text('lng', null, ['class' => 'form-control']) !!}
            </div> 
            <div class="form-group">
                {!! Form::label('image', 'Image:') !!}
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
            </div> 
            <div class="form-group">
                {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!} 
            </div>  
        {!! Form::close() !!}
    </div>  
    
</div>  

<br><br><br><br>
<br><br><br><br>

@endsection  


