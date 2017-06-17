<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<h2>List of Notes</h2>
	<ul>
		@foreach($notes as $note)
		<li>
			{{$note->note}}
		</li>
		@endforeach
	</ul>
</body>
</html>