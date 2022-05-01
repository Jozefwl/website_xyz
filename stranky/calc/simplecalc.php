<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Simple Calculator</title>
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
      background-color: #00ff91;
	
	  margin: 20 auto;
      width: 80vh;

     
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

	</style>
</head>
<body>


<P ALIGN="CENTER">

<div style="background-color:#00ff91;width:50%;text-align:center;padding:2px;margin:0 auto">
<FONT SIZE="7" COLOR="BLACK"><U>
Calculator WebApp</U><br></font>
Simple addition, subtraction, multiplication, division calculator<br><br>Jednoduchá kalkulačka na sčítanie, odčítanie, násobenie, delenie<p align="center">
</FONT>


</P>

<P ALIGN="CENTER"><FONT SIZE="5" COLOR="white">
<!--
Sometime in July 2021 I made this kitchen visualisation animation:<br></font><font color="white" size="4">
<iframe width="500" height="300" src="https://www.youtube.com/embed/w1FcyG6Rduw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<BR>Here is a photo of the finished kitchen in real life:<br>
<img src="kuchňa.jpg" width="469" height="352"></img>
<BR>As you can see, some changes were made.<br>The dishwasher was moved to the right and the drawers to the left.<br>This was to compensate for the space needed for sink plumbing and dishwasher plumbing.<br></p><p>The ceiling was also very crooked, due to the house being as old as it is.<br> Because of this, all the cabinets needed to be trimmed to accomodate the very 'W' shaped ceiling.
</FONT>
</P>
<P><FONT color="WHITE">.blend file download link coming soon...</font></p>
-->
<form action="simplecalc_calc.php">
<FONT COLOR="BLACK" size="3">
Number 1: <input type="number" name="number1">
<br>
Number 2: <input type="number" name="number2">
<br>
 <input type="radio" id="scitanie" name="operacia" value="scitanie">
  <label for="scitanie">Addition / Sčítanie</label><br>
  <input type="radio" id="odcitanie" name="operacia" value="odcitanie">
  <label for="odcitanie">Subtraction / Odčítanie</label><br>
  <input type="radio" id="nasobenie" name="operacia" value="nasobenie">
  <label for="nasobenie">Multiplication / Násobenie</label><br>
   <input type="radio" id="delenie" name="operacia" value="delenie">
  <label for="delenie">Division / Delenie</label><br>
  <input type="submit"></input>



</font>


</form>


</div>

<!--
<div style="background-color:#00ff00;width:50%;text-align:center;padding:2px;margin:0 auto">
<p>
asdfasdfasdfasd<br>
<img src="kuchňa.jpg" width="469" height="352"></img>
asdfasdfasdf</p>
</div>
-->
</TBODY>
</body>
</html>