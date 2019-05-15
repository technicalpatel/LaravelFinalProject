<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1><u>POST EDITED</u></h1><Br><br>

		@foreach($data as $da)
		
		
		
		<form action="/post/{{$da->id}}" method="post">
			@csrf
			@method('PUT')
		
		
	
	POST TYPE: &nbsp;&nbsp;<select name="post_type">
					<option name="educatio">EDUCATION</option>
					<option name="funny">FUNNY</option>
					<option name="song">SONG</option>
					<option name="image">IMAGE</option>
			</select><br><br>
	POST NAME:<input type="text" name="post_name" value="{{$da->post_name}}"></input><br><Br>
	POST DATE:<input type="date" name="post_date" value="{{$da->post_date}}"></input></Br></Br>
	POST TIME:<input type="time" name="post_time" value="{{$da->post_time}}"></input></Br></Br>
	<input type="submit" name="submit" value="SUBMIT">

		@endforeach
	</form>

</body>
</html>