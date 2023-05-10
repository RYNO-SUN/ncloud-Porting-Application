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

<form class="form-group"action="{{ url('/editbria/' .$briarecord->id) }} " method="POST" >
{{ @csrf_field() }}
{{ method_field('POST' )}}

<div  class="row">
  <div class="column" style="background-color:#aaa;">
  <label style="margin-left : 20px ; " for="name">Name</label>
    <input  value="{{old('name') ?? $briarecord->name}}" style="margin-left : 20px ; width : 500px ; padding-top : 15px" class="form-control" type="text" name="name"></br>
    <label style="margin-left : 20px ; " for="Company Name">Company Name</label>
    <input value="{{old('CompanyName') ?? $briarecord->CompanyName}}" style="margin-left : 20px ;width : 500px " class="form-control" type="text" name="CompanyName"></br>
    <label style="margin-left : 20px ; " for="VoipNumber">Voip Number</label>
    <input value="{{old('VoipNumber') ?? $briarecord->VoipNumber}}" style="margin-left : 20px ; width : 500px" class="form-control" type="text" name="VoipNumber"></br>
    <label style="margin-left : 20px ; " for="Virtual Pabx">Virtual Pabx</label>
    <input value="{{old('VirtualPabx') ?? $briarecord->VirtualPabx}}" style="margin-left : 20px ;width : 500px " class="form-control" type="text" name="VirtualPabx"></br>
    
  </div>

  <div  class="column" style="background-color:#bbb;">
  <label style="margin-left : 20px ; "  for="surname">Surname</label>
    <input value="{{old('surname') ?? $briarecord->surname}}" style="margin-left : 20px ;width : 500px " class="form-control" type="text" name="surname"></br>
    <label style="margin-left : 20px ; " for="CellNumber">Cell Number</label>
    <input value="{{old('CellNumber') ?? $briarecord->CellNumber}}" style="margin-left : 20px ;width : 500px " class="form-control" type="text" name="CellNumber"></br>
    <label style="margin-left : 20px ; " for="VpnServer">Vpn Server</label>
    <input value="{{old('VpnServer') ?? $briarecord->VpnServer}}" style="margin-left : 20px ; width : 500px" class="form-control" type="text" name="VpnServer"></br>
    <label  style="margin-left : 20px ; "for="adress">Customer Adress</label>
    <input  value="{{old('adress') ?? $briarecord->adress}}" style="margin-left : 20px ; width : 500px" class="form-control" type="text" name="adress"></br>
    <label  style="margin-left : 20px ; "for="Extensions">Extensions</label>
    <input  value="{{old('Extensions') ?? $briarecord->Extensions}}" style="margin-left : 20px ; width : 500px" class="form-control" type="text" name="Extensions"></br>
  </div>
</div>
<button style="margin-left : 0px ; background-color : Black ; color : white" class="form-control">Edit</button>


    
   
    
   
    
   
    
   
    


</form>


@endsection