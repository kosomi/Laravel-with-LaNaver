<h1>Comments</h1>

<div > 
    {!! Form::open(['url' =>'comments/'.$id]) !!}
        <div class="form-group"> 
            {!! Form::text('comments', null, ['class' => 'form-control']) !!}
        </div>  
        <div class="form-group"> 
            {!! Form::hidden('parent_id', $id, ['class' => 'form-control']) !!}
        </div>  
        <div class="form-group">
            {!! Form::submit('Add Comment', ['class' => 'btn btn-info form-control']) !!} 
        </div>
    {!! Form::close() !!} 

	<table class="table table-striped">
	  
		 @foreach($comments as $comment) 
		  <tr>		  
		   <td width="4%">{{$comment->id}}. </td>
		   <td width="4%">{{$comment->user}} </td>
		   <td>
		   	{{$comment->comments}} 
		   </td>    
		   <td>
		   	{{$comment->created_at}}
		   </td>
		  </tr>
		  <tr>
		  	<td></td>
		  	<td colspan="3"> @include('articles.reply') </td>
		  </tr>
		 @endforeach
	 
	</table> 

</div> 