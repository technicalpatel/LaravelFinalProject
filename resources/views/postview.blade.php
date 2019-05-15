<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<table border="1">
		<tr>
			<th>POST-TYPE</th>
			<th>POST-NAME</th>
			<th>POST-DATE</th>
			<th>POST-TIME</th>
			<th>POST-EDIT</th>
			<th>POST-DELETE</th>
		</tr>
		@foreach($data as $d)
		<tr>
			<td>{{$d->post_type}}</td>
			<td>{{$d->post_name}}</td>
			<td>{{$d->post_date}}</td>
			<td>{{$d->post_time}}</td>
			<td>
					<a href="post/{{$d->id}}/edit">EDIT</a>
					
			</td>
			<td>
					<form action="/post/{{$d->id}}" method="post">
						@csrf
						@method('delete')
						<input type="submit" name="submit" value="DELETE">	
					</form>			
			</td>
			
		</tr>
		@endforeach
	</table>
</body>
</html>