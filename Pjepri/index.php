<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
    <form action="includes/signup.inc.php" method="post">
			<h1>Krijo llogari</h1>
		<input type="text" name="uid" placeholder="Username">
      <input type="text" name="mail" placeholder="E-mail">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwd-repeat" placeholder="Repeat Password">
      <button type="submit" name="signup-submit">Signup</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
    <form action="includes/login.inc.php" method="post">
			<h1>Futuni</h1>

      <input type="text" name="mailuid" placeholder="Username/E-mail...">
      <input type="password" name="pwd" placeholder="Password...">
      <button type="submit" name="login-submit">Sign in</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h2>Vendosni te dhenat tuaja<br>
			Faleminderit</h2>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Social Media</h1>
				<p>Ne qofte se nuk keni nje llogari ju jutem klikoni Sign Up</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>

</footer>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
