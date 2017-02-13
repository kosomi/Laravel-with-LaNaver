@extends('layouts.app')

@section('content') 

    <div class="container">  

        <div>
            <h2>Read</h2>
        </div> 

        <div class="container"> 
            <div class="form-group">  
                제목: {{ $article->title }}
                <br>
                {{ $article->body }}
                <br><br><br>
            </div> 

            @if($errors->any())
             <ul class='alert alert-danger'>
              @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
              @endforeach
             </ul> 
            @endif          
        </div>
 
            @include('articles.comment')   

    </div>
    <br><br>

@include('articles.list')

@endsection

