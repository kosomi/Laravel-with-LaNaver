@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $store->name }}</div>

                <div class="panel-body">
                    <table width='100%'>   
                        <tr>
                            <th width="100px">Name </th>
                            <td>{{ $store->name }}</td> 
                        </tr>
                        <tr>
                            <th width="100px">phone  </th>
                            <td>{{ $store->phone  }}</td> 
                        </tr>
                        <tr>
                            <th width="100px">Address </th>
                            <td>{{ $store->address }}</td> 
                        </tr>
                        <tr>
                            <th width="100px">lat  </th>
                            <td>{{ $store->lat  }}</td> 
                        </tr>
                        <tr>
                            <th width="100px">lng  </th>
                            <td>{{ $store->lng  }}</td> 
                        </tr>
                        <tr>
                            <th width="100px">Name </th>
                            <td>{{ $store->name }}</td> 
                        </tr>
 
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>   

<br><br><br><br>
<br><br><br><br>

@endsection  


