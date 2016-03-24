<!DOCTYPE html>
<html>
<head>
	<title>detail</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="container">
<blockquote>
  <p><em> {{$data->judul}}</em>.</p>
  <footer> {{$data->subjudul}}</footer>
  <footer> <img class="img-thumbnail" width="500" height="400" src="{{asset('gambar/'.$data->image)}}"></footer
</blockquote>

</div>
</body>
</html>