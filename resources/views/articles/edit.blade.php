@extends('layouts.app')

@section('content')

<div class="container">

 <div>
  <h1>Edit</h1>
 </div>

    <div class="container"> 
        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!} 
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

    @if($errors->any())
     <ul class='alert alert-danger'>
      @foreach($errors->all() as $error)
    <li>{{ $error }} </li>
      @endforeach
     </ul> 
    @endif

    <ul>
     {{ var_dump($errors) }}
    </ul>

</div>


@endsection  