<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>IP Calculator Result</title>
	<style type="text/css" media="screen">
 body {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 150 auto;
      height: 150vh;
      background-color: #325580;
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

<div class="logoman"><img src="scuffed_snina.png" height="200" width="250"></img></div>

<P ALIGN="CENTER">

<! VELKY BIELY OBDLZNIK
>
<div style="background-color:#ffffff;width:80%;text-align:center;padding:5px;margin:0 auto">

<! NADPIS
>
<div style="background-color:#abd1ff;width:60%;text-align:center;padding:5px;margin:0 auto">
<FONT SIZE="6" COLOR="Black"><U>IP Calculator WebApp (ENGLISH)</U><br></font>
</div>
<br>
<div style="background-color:#b8b8b8;width:80%;height:150px;text-align:center;padding:5px;margin:0 auto">
<br>

<p ALIGN="CENTER">
 <FONT ALIGN="CENTER" COLOR="WHITE"><b>EXTREMELY Simple IP calculator for WebDesign class<br></b><i>currently only subnet calculator works...</i></FONT><br>
</p>

<form action="ip_calc.php">
<?php $Maximum = 255; ?>
IP Address: <input type="number" min="0" max="255" name="oktet1">

<input type="number" min="0" max="255" name="oktet2">

<input type="number" min="0"  max="255" name="oktet3">

<input type="number" min="0"  max="255" name="oktet4"><br>
Subnet Mask: 
<input type="number" min="0"  max="32" name="subnet"><br>



</div>
<br><br>

<p align="center">Calculate:
<input type="submit"></input>
</p>
</div>





<br>


</body>
</html>