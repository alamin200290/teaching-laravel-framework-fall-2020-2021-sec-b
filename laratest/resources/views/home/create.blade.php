<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			
			<fieldset>
				<legend>Create User</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Cgpa</td>
					<td><input type="text" name="cgpa" value="{{old('cgpa')}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>