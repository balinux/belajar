<!DOCTYPE html>
<html>
<head>
	<title>tampilkan gambar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>Judul</th>
				<th>Sub judul</th>
				<th>Gambar</th>
			</tr>
		</thead>

		<tbody>
		@foreach($data as $a)
			<tr>
				<td>{{$a->judul}}</td>
				<td>{{$a->subjudul}}</td>
				<td> <a href="#" class="img-circle">
					<img class="img-responsive img-circle" width="200" height="300" src="{{asset('gambar/'.$a->image)}}">
				</a></td>
				<td>{{$a->image}}</td>
			</tr>	
		@endforeach
		</tbody>
	</table>
	</div>
</div>
</body>
</html>