<?php
require 'header.php';
 ?>

<main>
  <h1>signup</h1>
  <form action="includes/signup.inc.php" method="post">
<input type="text" name="uid" placeholder="Username">
<span class="help-block"><?php echo $username_err; ?></span>
<input type="text" name="mail" placeholder="E-mail">
<input type="password" name="pwd" placeholder="Password">
<input type="password" name="pwd-repeat" placeholder="Repeat Password">
<button type="submit" name="signup-submit">Signup</button>
  </form>
</main>

<?php
	require 'footer.php';
?>
