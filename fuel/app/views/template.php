<?php
use Fuel\Core\Html;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>
<?php 
	echo $title;
?>
</title>
</head>

<body>
	<h1>問い合わせ</h1>
	<div id="wrapper">
		<?php echo $content; ?>
		<hr>
		<p class="footer">
			Powered by <?php echo Html::anchor('http://fuelphp.com/' , 'FuelPHP'); ?>
		</p>
	</div>
</body>
</html>