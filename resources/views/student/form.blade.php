<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
@if(Session::has('message'))
	<span style="color:green;">{!!Session::get('message')!!}  </span>

@endif
	<form action="{{URL::to('insert')}}" method="POST" >
	{{csrf_field()}}
		
		<input type="text" name="username" placeholder="username">
		@if($errors->has('username'))

		<span style="color:red;">{!!$errors->first('username')!!}  </span>
		
		@endif
		<br>
		<input type="text" name="name" placeholder="name">
		@if($errors->has('name'))

		<span style="color:red;">{!!$errors->first('name')!!}  </span>
		
		@endif
		<br>
		<input type="text" name="email" placeholder="email">
		@if($errors->has('email'))

		<span style="color:red;">{!!$errors->first('email')!!}  </span>
		
		@endif
		<br>
		<input type="submit"  value="Simpan" >
	</form>	
</body>
</html>