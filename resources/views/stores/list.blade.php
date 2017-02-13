<div class="container">

	<h1>Stores List</h1>

	<div align="right"><a href="/stores/add" class='btn btn-primary'>create</a></div>
	<br>
	<table class="table table-striped">
	  
		 @foreach($stores as $store) 
		  <tr>		  
		   <td width="4%">{{$store->id}}. </td>
		   <td width="14%">{{$store->name}} </td>
		   <td>
		   	<a href="/store/{{$store->id}}">{{$store->address}}</a> 
		   </td>     
		  </tr>
		 @endforeach
	 
	</table> 

	<div align="right"><a href="/stores/add" class='btn btn-primary'>create</a></div>	

</div> 

<br><br><br><br>
<br><br><br><br>
<br><br><br><br> 




