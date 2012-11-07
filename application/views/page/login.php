<form method="post" action="/login/logon">
	<?php echo (isset($emptyLogin))? $emptyLogin . "<br />" : ""; ?>
	Login: <input type="text" name="login"><br>
	
	<?php echo (isset($emptyPassword))? $emptyLogin . "<br />" : ""; ?>
	Password: <input type="password" name="password"><br>
	<input type="submit" value="Login">
</form>