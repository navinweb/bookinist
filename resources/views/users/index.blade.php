<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>All Users</h1>

	@foreach ($users as $user)

		<li>{{ $user->name }}</li>

	@endforeach

	<form action="/users" method="post">
		{{ csrf_field() }}
		<p><input type="text" name="name" placeholder="name" required=""></p>
		<p><input type="email" name="email" placeholder="email" required=""></p>
		<p><input type="password" name="password" placeholder="password" required=""></p>
		<p><button type="submit">Add User</button></p>
	</form>
	
</body>
</html>