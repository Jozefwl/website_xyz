<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Feedback</title>
	
	</head>

	
	<body bgcolor="00000">


	<?php
		
	function fileName(){
	date_default_timezone_set("Europe/Berlin");
	return date("d m Y") . date(" H i s");
		
	}
	?>

	<font color="white">
	<div align="center">
	<p>
	<h1>Your feedback:</h1>
	
	<?php
	
	function getIP(){
	$user_ip = file_get_contents('https://api.ipify.org?format=jsonp&callback=getIP');
	return $user_ip;
		}
	
	echo $_POST["feedback"];
	echo "<br>";
	$myfile = fopen("FEEDBACK", "a") or die("<br>Feedback not sent!<br>Try again!<br><a href=https://github.com/Jozefwl>or Contact site administrator via GitHub!</a>");

	$txt = "\n" . fileName() . "\n" . $_POST["feedback"] . "\n"; //. getIP();
	fwrite($myfile, $txt);
	fclose($myfile);
	?>
	<h2>Feedback sent!</h2>
	Your feedback was sent succesfully! You may return to the home page using this button:
	</p>
	<a href="https://jozkowaldo.xyz"><button>Return</button></a>
	</div>
	
	</font>
	</body>
	
</html>