<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="post/" method="post">

		@csrf
	<center>
		<h1><u>POST INSERTED</u></h1><Br><br>
	
	POST TYPE: &nbsp;&nbsp;<select name="post_type">
					<option name="educatio">EDUCATION</option>
					<option name="funny">FUNNY</option>
					<option name="song">SONG</option>
					<option name="image">IMAGE</option>
			</select><br><br>
	POST NAME:<input type="text" name="post_name"></input><br><Br>
	POST DATE:<input type="date" name="post_date"></input></Br></Br>
	POST TIME:<input type="time" name="post_time"></input></Br></Br>
	<input type="submit" name="submit" value="SUBMIT">
	</form>

</body>
</html>