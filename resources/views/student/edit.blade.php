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
	<form action="{{URL::to('update/'.$edit->username)}}" method="POST" >
	{{csrf_field()}}
		
		<input type="text" name="username" value="{{$edit->username}}" placeholder="nama awal">
		
		<br>
		<input type="text" name="name" value="{{$edit->name}}" placeholder="nama akhir">
		<br>
		<input type="text" name="email" value="{{$edit->email}}" placeholder="nama akhir">
		
		<br>
		<input type="submit"  value="Update" >
	</form>	
</body>
</html>