<div class="container">

	<h1>List</h1>

	<div align="right"><a href="/create" class='btn btn-primary'>create</a></div>
	<br>
	<table class="table table-striped">
	  
		 @foreach($articles as $article) 
		  <tr>		  
		   <td width="4%">{{$article->id}}. </td>
		   <td width="4%">{{$article->user}} </td>
		   <td>
		   	<a href="/show/{{$article->id}}">{{$article->title}}</a> 
		   </td>    
		   <td width="10%"><a href="/delete/{{$article->id}}" onclick="return confirm('Are you sure?')">Delete</a></td>
		   <td width="10%"><a href="/edit/{{$article->id}}">Edit</a> </td>
		  </tr>
		 @endforeach
	 
	</table> 

	<div align="right"><a href="/create" class='btn btn-primary'>create</a></div>	

</div> 

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
