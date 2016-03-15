<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap.min.css')}}">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
@if(Session::has('delmessage'))

<span style="color:red;"> {!!Session::get('delmessage')!!}</span>
@endif

@if(Session::has('updatemessage'))

<span style="color:blue;"> {!!Session::get('updatemessage')!!}</span>
@endif

<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama awaml</th>
			<th>Nama akhir</th>
			<th>Alamat</th>
		</tr>
	</thead>

	<tbody>
	@foreach($data as $a)
		<tr>
			<td>{{$a->firstname}}</td>
			<td>{{$a->lastname}}</td>
			<td>{{$a->address}}</td>
			<td> <a href="{{URL::to('editform/'.$a->id)}}">edit</a> | <a href="{{URL::to('delete/'.$a->id)}}">delete</a> </td>
		</tr>
	@endforeach
	</tbody>
</table>	
</body>
</html>