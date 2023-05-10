@extends('layouts.admin')

@section('content')




<table style="border: solid 1px silver ; margin-left : 10px; margin-top : 10px;   padding-inline: 5% 2%;" class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">CompanyName</th>
      <th scope="col">CellNumber</th>
      <th scope="col">VoipNumber</th>
      <th scope="col">VpnServer</th>
      <th scope="col">VirtualPabx</th>
      <th scope="col">Extensions</th>
      <th scope="col">adress</th>

     
    </tr>
  </thead>
  <tbody>
    <tr>
     
      @foreach($allbriacustomers as $row)

<tr scope="row">
<td scope="row">{{$row['id' ]}}</td>
<td scope="row">{{$row['name' ]}}</td>
<td scope="row">{{$row['surname' ]}}</td>
<td scope="row">{{$row['CompanyName' ]}}</td>
<td scope="row">{{$row['CellNumber' ]}}</td>
<td scope="row">{{$row['VoipNumber' ]}}</td>
<td scope="row">{{$row['VpnServer' ]}}</td>
<td scope="row">{{$row['VirtualPabx' ]}}</td>
<td scope="row">{{$row['Extensions' ]}}</td>
<td scope="row">{{$row['adress' ]}}</td>

<td><a class="thead-light" href="editbria/{{$row['id']}}"  title="Edit" data-toggle="tooltip"><i class="material-icons">Edit</i></a></td>


<td><form class="thead-light" action="{{url('/delete-bria-record/' .$row['id'])}}" method="post">
{{ method_field('DELETE')}}
{{csrf_field()}}

<button type="submit">DEL</button>
</tr>
@endforeach
</table>    
</tbody>

@endsection