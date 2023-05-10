@extends('layouts.admin')

@section('content')

<table style="border: solid 1px silver ; margin-left : 10px;   padding-inline: 5% 2%;" class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Available Numbers</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
     
      @foreach($usednumbers as $row)

<tr scope="row">
<td scope="row">{{$row['id' ]}}</td>
<td scope="row">{{$row['UsedNumber' ]}}</td>
</tr>


@endforeach
</table>    
</tbody>

@endsection