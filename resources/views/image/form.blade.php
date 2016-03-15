<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<form action="{{URL::to('image/insert')}}" method="POST" accept-charse="utf-8" enctype="multipart/form-data">
	{!!csrf_field()!!}
	<input type="text" name="judul" placeholder="judul">
	<br>
	<input type="text" name="sub_judul" placeholder="sub_judul">
	<br>
	<input type="file" name="image" >
	<br>
	<input type="submit" value="simpan">
	
</form>	
</body>
</html>