<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login Confirm</title>
</head>
<body>
<?php 
	if (!empty($username) && !empty($password)){
		echo "Login Successfull<br>";
		echo html_tag('a' , array(
				'href' => 'http://localhost/fuelphp17/public/blog/index/'
		) , 'Click link redirect blog home page');
	}else{
		echo "Login Failed";
	}
?>
</body>
</html>