<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Calculator Results</title>
	<style type="text/css" media="screen">
	body {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 150 auto;
      height: 150vh;
      background-color: #000000;
    }
.square {
		display: flex;
      align-items: center;
      background-color: #DCDFE6;
	
	  margin: 100 auto;
      width: 200 auto;

     
    }
	  .button {
  border: none;
  color: white;

  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 10px 10px;
  cursor: pointer;
}
	.logoman {
		position:fixed;
		left:0;
		right:0;
		top:0;
		bottom:0;
		z-index:-1;
		}
	</style>
</head>
<body>
<!-- <div class="logoman"><img src="scuffed_snina.png" height="200" width="250"></img></div> 


 <b>Operation: </b>echo $_GET["oktet1"];echo "."; echo $_GET["oktet2"]; echo "."; echo $_GET["oktet3"]; echo ".";echo $_GET["oktet4"];   ?></FONT><br>
<FONT ALIGN="CENTER" COLOR="WHITE"><b>Subnet mask:</b> echo $_GET["subnet"]; ?></font>
</p>


-->


<?php
function napisOperaciu() {
	echo "<FONT ALIGN='CENTER' COLOR='WHITE'>";
	if($_GET["operacia"] == "scitanie"){echo "Addition / Sčítanie";} 
	else if($_GET["operacia"] == "odcitanie"){echo "Subtraction / Odčítanie";} 
	else if($_GET["operacia"] == "nasobenie"){echo "Multiplication / Násobenie";} 
	else if($_GET["operacia"] == "delenie"){echo "Division / Delenie";} 
	echo "</font>";
}

function napisOperacnyZnak() {
	echo "<FONT ALIGN='CENTER' COLOR='WHITE'>";
	if($_GET["operacia"] == "scitanie"){echo " + ";} 
	else if($_GET["operacia"] == "odcitanie"){echo " - ";} 
	else if($_GET["operacia"] == "nasobenie"){echo " * ";} 
	else if($_GET["operacia"] == "delenie"){echo " / ";} 
	echo "</font>";
}

function operacnyZnak() {
	echo "<FONT ALIGN='CENTER' COLOR='WHITE'>";
	if($_GET["operacia"] == "scitanie"){return "+";} 
	else if($_GET["operacia"] == "odcitanie"){return "-";} 
	else if($_GET["operacia"] == "nasobenie"){return "*";} 
	else if($_GET["operacia"] == "delenie"){return "/";} 
	echo "</font>";
}

function kalkulacia(){
	$a = (int)$_GET["number1"];
	$b = (int)$_GET["number2"];
	$vysledok = 0;
	
	switch(operacnyZnak()){
		case "+": $vysledok = $a + $b;
		break;
		
		case "-": $vysledok = $a - $b;
		break;
		
		case "*": $vysledok = $a * $b;
		break;
		
		case "/": $vysledok = $a / $b;
		break;
	}
		echo $vysledok;
}
	
?>










<P ALIGN="CENTER">

<! VELKY BIELY OBDLZNIK
>
<div style="background-color:#ffffff;width:50%;text-align:center;padding:5px;margin:0 auto">

<! NADPIS
>
<div style="background-color:#abd1ff;width:30%;text-align:center;padding:5px;margin:0 auto">
<FONT SIZE="6" COLOR="Black"><U>Result/Výsledok</U><br></font>
</div>
<br>
<div style="background-color:#b8b8b8;width:30%;height:150px;text-align:center;padding:5px;margin:0 auto">
<br>

<p ALIGN="CENTER">


<?php 
echo "<font size='5' color='white'> Operation: ";
napisOperaciu();

echo "<br><br>";
echo $_GET["number1"];
napisOperacnyZnak();
echo $_GET["number2"];
echo " = ";
kalkulacia();
echo "</font>";
?>





</body>
</html>