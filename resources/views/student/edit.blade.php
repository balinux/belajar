<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>edit</title>
	<link rel="stylesheet" href="">
</head>
<body>
@if(Session::has('message'))
	<span style="color:green;">{!!Session::get('message')!!}  </span>

@endif
	<form action="{{URL::to('update/'.$edit->id)}}" method="POST" >
	{{csrf_field()}}
		
		<input type="text" name="first_name" value="{{$edit->firstname}}" placeholder="nama awal">
		
		<br>
		<input type="text" name="last_name" value="{{$edit->lastname}}" placeholder="nama akhir">
		
		<br>
		<textarea name="address"  placeholder="almat">{{$edit->address}}</textarea>
		
		<br>
		<input type="submit"  value="Update" >
	</form>	
</body>
</html>