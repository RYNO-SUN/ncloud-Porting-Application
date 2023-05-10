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

<form class="form-group" action="/addnewnumber" method="POST">
    @csrf

<div class="row">
  <div class="column" style="background-color:#aaa;">
  
  <label for="AvailableNumber">Add New Number</label>
    <input type="text" name="AvailableNumber"></br>

  </div>

  <div class="column" style="background-color:#bbb;">
 
  </div>
</div>
<button style="margin-left : 0px ; background-color : Black ; color : white" class="form-control">Add</button>
</form>


@endsection