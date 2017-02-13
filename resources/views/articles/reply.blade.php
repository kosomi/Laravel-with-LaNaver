<div class="container"> 

	<table class="table table-striped">
	  
		 @foreach($replies as $reply) 
		 	@if($comment->id==$reply->comment_id)
			  <tr>		  
			   <td width="5%">ㄴ {{$reply->id}}.   </td>
		   		<td width="4%">{{$comment->user}} </td>
			   <td>
			   	{{$reply->reply}}
			   </td>    
			   <td width="20%">
			   	{{$reply->created_at}}
			   </td>
			  </tr>
			@endif
		 @endforeach	 
	</table> 

    {!! Form::open(['url' =>'replies/'.$id]) !!}
        <div class="form-group"> 
            {!! Form::text('reply', null, ['class' => 'form-control']) !!}
        </div>  
        <div class="form-group"> 
            {!! Form::hidden('comment_id', $comment->id, ['class' => 'form-control']) !!}
        </div>  
        <div class="form-group">
            {!! Form::submit('Add Reply', ['class' => 'btn btn-info form-control']) !!} 
        </div>
    {!! Form::close() !!} 

</div> 