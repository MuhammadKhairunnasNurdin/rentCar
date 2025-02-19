<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?=BASEURL?>/css/authorization.css">
	<title><?=$data['title']?>></title>
</head>

<body>
<div class="login-container">
	<h2>RentCar</h2>
	<form action="<?=BASEURL?>/Authorization/loginVerify" method="post">
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
		</div>

		<button type="submit" class="login-button">Login</button>
	</form>
</div>
</body>

</html>