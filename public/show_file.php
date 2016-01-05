<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Show File</title>
</head>
<body>
    <?php
		$file = __FILE__;
		$content = file_get_contents ( $file );
		//var_dump($content);
		echo nl2br ( htmlspecialchars ( $content, ENT_QUOTES, 'UTF-8' ), false );
	?>
</body>
</html>