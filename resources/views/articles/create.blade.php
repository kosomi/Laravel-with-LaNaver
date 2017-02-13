@extends('layouts.app')

@section('content')

<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  
<div class="container">
 <div>
  <h1>Create</h1>
 </div>

    <div class="container"> 
        {!! Form::open(['url' =>'article']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Body:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div> 
            <div class="form-group">
                {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!} 
            </div>
        {!! Form::close() !!}
    </div>  
    
</div>  

</head>
<body> 

@endsection
