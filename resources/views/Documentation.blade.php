@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html>
<body> 



<div>
<p style="padding : 50px">
•	Signed GNP From in PDF format with all your company information and the telephone number you want to port to nCloud (Pty) Ltd <br>
•	Authorization letter with your company letterhead in PDF format <br>
•	Latest telephone invoice or statement account number and holder verification from your client<br>
•	In the case of an ISDN, an authorization letter stating whether to cancel or create a new range for the numbers that are not being ported from your client<br>
•	Copy of Directors ID
<p>
</div>



<!-- GNP Form -->
<button class="btn btn-danger">
<a style="color : white; padding : 50px ; margin-left : 50px;" href="{{asset('dist/GNPform.docx')}}"  download="GNP Form">
  Download GNP Form
</a>
</button >




<!-- DataTables  & Plugins -->
<button class="btn btn-danger">
<a style="color : white; margin-left : 50px ; " href="{{asset('dist/EPA.docx')}}" download="Example of Porting Auth Letter">
  Download Example OF Porting Authorization Letter
</a>
</button>


</body>
</html>



@endsection