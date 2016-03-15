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
		
		<input type="text" name="first_name" placeholder="nama awal">
		@if($errors->has('first_name'))

		<span style="color:red;">{!!$errors->first('first_name')!!}  </span>
		
		@endif
		<br>
		<input type="text" name="last_name" placeholder="nama akhir">
		@if($errors->has('last_name'))

		<span style="color:red;">{!!$errors->first('last_name')!!}  </span>
		
		@endif
		<br>
		<textarea name="address" placeholder="almat"></textarea>
		@if($errors->has('address'))

		<span style="color:red;">{!!$errors->first('address')!!}  </span>
		
		@endif
		<br>
		<input type="submit"  value="Simpan" >
	</form>	
</body>
</html>