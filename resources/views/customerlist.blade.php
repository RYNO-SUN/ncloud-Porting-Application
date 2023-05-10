@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>




</body>
</html>


<table class="table table-hover"style="border: solid 1px silver ; margin-left : 10px; margin-top : 10px;   padding-inline: 5% 2%;" class="table table-bordered">
  <thead class="table table-hover" >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">CompanyName</th>
      <th scope="col">CellNumber</th>
      <th scope="col">VoipNumber</th>
      <th scope="col">VpnServer</th>
      <th scope="col">VirtualPabx</th>
      <th scope="col">adress</th>

     
    </tr>
  </thead>
  <tbody  class="table table-hover">
  <thead class="thead-light">

@foreach($allcustomers as $row)

      
<td scope="row">{{$row['id' ]}}</td>
<td scope="row">{{$row['name' ]}}</td>
<td scope="row">{{$row['surname' ]}}</td>
<td scope="row">{{$row['CompanyName' ]}}</td>
<td scope="row">{{$row['CellNumber' ]}}</td>
<td scope="row">{{$row['VoipNumber' ]}}</td>
<td scope="row">{{$row['VpnServer' ]}}</td>
<td scope="row">{{$row['VirtualPabx' ]}}</td>
<td scope="row">{{$row['adress' ]}}</td>


<td><a class="thead-light" href="edit/{{$row['id']}}"  title="Edit" data-toggle="tooltip"><i class="material-icons">Edit</i></a></td>

<td><form class="thead-light" action="{{url('/delete-record/' .$row['id'])}}" method="post">
{{ method_field('DELETE')}}
{{csrf_field()}}

<button type="submit">DEL</button>





</form>
</thead>
</td>
<td>
  


</td>
</tr>
@endforeach
</table>    
</tbody>


@endsection