<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Webserver</title>
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
<FONT SIZE="6" COLOR="Black"><U>Result/Výsledok</U><br></font>
</div>
<br>
<div style="background-color:#b8b8b8;width:80%;height:150px;text-align:center;padding:5px;margin:0 auto">
<br>

<p ALIGN="CENTER">
 <FONT ALIGN="CENTER" COLOR="WHITE"><b>IP address: </b><?php echo $_GET["oktet1"];echo "."; echo $_GET["oktet2"]; echo "."; echo $_GET["oktet3"]; echo ".";echo $_GET["oktet4"];   ?></FONT><br>
<FONT ALIGN="CENTER" COLOR="WHITE"><b>Subnet mask:</b><?php echo $_GET["subnet"]; ?></font>
</p>

<?php 

if($_GET["subnet"] == 0){echo "subnet mask is 0.0.0.0";};
if($_GET["subnet"] == 1){echo "subnet mask is 128.0.0.0";};
if($_GET["subnet"] == 2){echo "subnet mask is 192.0.0.0";};
if($_GET["subnet"] == 3){echo "subnet mask is 224.0.0.0";};
if($_GET["subnet"] == 4){echo "subnet mask is 240.0.0.0";};
if($_GET["subnet"] == 5){echo "subnet mask is 248.0.0.0";};
if($_GET["subnet"] == 6){echo "subnet mask is 252.0.0.0";};
if($_GET["subnet"] == 7){echo "subnet mask is 254.0.0.0";};
if($_GET["subnet"] == 8){echo "subnet mask is 255.0.0.0";};
if($_GET["subnet"] == 9){echo "subnet mask is 255.128.0.0";};
if($_GET["subnet"] == 10){echo "subnet mask is 255.192.0.0";};
if($_GET["subnet"] == 11){echo "subnet mask is 255.224.0.0";};
if($_GET["subnet"] == 12){echo "subnet mask is 255.240.0.0";};
if($_GET["subnet"] == 13){echo "subnet mask is 255.248.0.0";};
if($_GET["subnet"] == 14){echo "subnet mask is 255.252.0.0";};
if($_GET["subnet"] == 15){echo "subnet mask is 255.254.0.0";};
if($_GET["subnet"] == 16){echo "subnet mask is 255.255.0.0";};
if($_GET["subnet"] == 17){echo "subnet mask is 255.255.128.0";};
if($_GET["subnet"] == 18){echo "subnet mask is 255.255.192.0";};
if($_GET["subnet"] == 19){echo "subnet mask is 255.255.224.0";};
if($_GET["subnet"] == 20){echo "subnet mask is 255.255.240.0";};
if($_GET["subnet"] == 21){echo "subnet mask is 255.255.248.0";};
if($_GET["subnet"] == 22){echo "subnet mask is 255.255.252.0";};
if($_GET["subnet"] == 23){echo "subnet mask is 255.255.254.0";};
if($_GET["subnet"] == 24){echo "subnet mask is 255.255.255.0";};
if($_GET["subnet"] == 25){echo "subnet mask is 255.255.255.128";};
if($_GET["subnet"] == 26){echo "subnet mask is 255.255.255.192";};
if($_GET["subnet"] == 27){echo "subnet mask is 255.255.255.224";};
if($_GET["subnet"] == 28){echo "subnet mask is 255.255.255.240";};
if($_GET["subnet"] == 29){echo "subnet mask is 255.255.255.248";};
if($_GET["subnet"] == 30){echo "subnet mask is 255.255.255.252";};
if($_GET["subnet"] == 31){echo "subnet mask is 255.255.255.254";};
if($_GET["subnet"] == 32){echo "subnet mask is 255.255.255.255";};


echo "<br>IP adress: <i>unfinished</i>";



?>





</body>
</html>