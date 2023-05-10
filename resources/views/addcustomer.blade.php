@extends('layouts.admin')

@section('content')

<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
 
  background-color : white !important;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  background-color : white !important;
}

.row{
    background-color : white !important;
}
</style>

<form class="form-group" action="/addcustomer" method="POST">
    @csrf

<div  class="row">
  <div class="column" style="background-color:#aaa;">
  <label style="margin-left : 20px ; " for="name">Name</label>
    <input style="margin-left : 20px ; width : 500px ; padding-top : 15px" class="form-control" type="text" name="name"></br>
    <label style="margin-left : 20px ; " for="Company Name">Company Name</label>
    <input style="margin-left : 20px ;width : 500px " class="form-control" type="text" name="CompanyName"></br>
    <label style="margin-left : 20px ; " for="VoipNumber">Voip Number</label>
    <input style="margin-left : 20px ; width : 500px" class="form-control" type="text" name="VoipNumber"></br>
    <label style="margin-left : 20px ; " for="Virtual Pabx">Virtual Pabx</label>
    <input style="margin-left : 20px ;width : 500px " class="form-control" type="text" name="VirtualPabx"></br>
    
  </div>

  <div  class="column" style="background-color:#bbb;">
  <label style="margin-left : 20px ; "  for="surname">Surname</label>
    <input style="margin-left : 20px ;width : 500px " class="form-control" type="text" name="surname"></br>
    <label style="margin-left : 20px ; " for="CellNumber">Cell Number</label>
    <input style="margin-left : 20px ;width : 500px " class="form-control" type="text" name="CellNumber"></br>
    <label style="margin-left : 20px ; " for="VpnServer">Vpn Server</label>
    <input style="margin-left : 20px ; width : 500px" class="form-control" type="text" name="VpnServer"></br>
    <label  style="margin-left : 20px ; "for="adress">Customer Adress</label>
    <input style="margin-left : 20px ; width : 500px" class="form-control" type="text" name="adress"></br>
  </div>
</div>
<button style="margin-left : 0px ; background-color : Black ; color : white" class="form-control">Add</button>


    
   
    
   
    
   
    
   
    


</form>


@endsection