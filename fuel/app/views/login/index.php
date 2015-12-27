<?php
use Fuel\Core\Form;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login Page</title>
</head>
<body>
<!--
	<form action="/classes/controller/login.php" method="post" accept-charset="UTF-8">
		<fieldset>
			<label for="username">User Name(*): </label>
			<input type="text" name="username" id="username" maxlength="50">
			<br><br>
			<label for="password">Password(*):</label> &nbsp;&nbsp;
			<input type="password" name="password" id="password" maxlength="50">
			<br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
  -->
	<?php 
		
		// create Form using Fuel/Form 
		echo Form::open(array(
				'action' => 'login/confirm',
				'method' => 'post'
		));
		
		// Create input text form
		echo Form::label('User Name(*)' , 'username');
		echo "&nbsp;&nbsp;";
		echo Form::input('username' , '' , array(
				'maxlength' => 50,
				'size' => 20
		));
		echo "<br><br>";
		// Create input password
		echo Form::label('Password(*):' , 'password');
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo Form::password('password' , '' , array(
				'maxlength' => 50 ,
				'size' => 20
		));
		echo "<br><br>";
		// Create submit button
		echo Form::submit('submit' , 'LOGIN');
		
		// Close Form
		echo Form::close();
	
	
	?>
  
</body>
</html>