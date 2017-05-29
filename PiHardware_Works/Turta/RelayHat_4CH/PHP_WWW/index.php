<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #29ABE2;
}
h1{
	color:#FFF;
	font-size:24px;
	font-family:Arial, Helvetica, sans-serif;
}
.md{
	text-align:center;
	width:300px;
	height:60px;
	line-height:30px;
	background-color:#FFFFFF;
	border-radius:20px;
	margin-left:auto;
	margin-right:auto;
	cursor:pointer;
	font-size:18px;
	font-family:Arial, Helvetica, sans-serif;
	margin-bottom:10px;
}
.md:hover{
	background-color:#CCCCCC;
}
a{
	text-decoration: none;
}
.main{
	display:block;
}
</style>
<script type="application/javascript">
function DoubleShowDiv(clickevent,clickevent2){
	if (document.getElementById(clickevent).style.display == "block") {
		document.getElementById(clickevent).style.display = "none";
		document.getElementById(clickevent2).style.display = "block";
	} else {
		document.getElementById(clickevent).style.display = "block";
		document.getElementById(clickevent2).style.display = "none";
	}            
}
</script>
</head>

<body>



<?php
if(isset($_POST['Turta4CH1On'])){
 exec("sudo ./turta4CH 1 1 1");
}
 
if(isset($_POST['Turta4CH1Off'])){
 exec("sudo ./turta4CH 1 1 0");
}
 
if(isset($_POST['Turta4CH2On'])){
 exec("sudo ./turta4CH 1 2 1");
}
 
if(isset($_POST['Turta4CH2Off'])){
 exec("sudo ./turta4CH 1 2 0");
}
if(isset($_POST['Turta4CH3On'])){
 exec("sudo ./turta4CH 1 3 1");
}
 
if(isset($_POST['Turta4CH3Off'])){
 exec("sudo ./turta4CH 1 3 0");
}
if(isset($_POST['Turta4CH4On'])){
 exec("sudo ./turta4CH 1 4 1");
}
 
if(isset($_POST['Turta4CH4Off'])){
 exec("sudo ./turta4CH 1 4 0");
}
 
 ?>

<div align="center">
  <h1>Raspberry Pi Web I/O (GPIO Control)</h1>
  <div id="main">
  	<div class="md" onclick="DoubleShowDiv('main','turta4ch')">TURTA 4CH RELAY HAT (4 PIN KONTROLÜ)</div>
  </div>

  <div id="turta4ch" style="display:none;">
  	<div class="md" onclick="DoubleShowDiv('turta4ch','main')">
<a href="#">Geri dön</a>
    </div>


	<form name="TurtaAllCH" method="post" action="index.php">
        	<button class="md" name="Turta4CH1On">1.portu ac</button>
            <br>
            <button class="md" name="Turta4CH1Off">1.portu kapat</button>
			<br>
			<button class="md" name="Turta4CH2On">2.portu ac</button>
            <br>
            <button class="md" name="Turta4CH2Off">2.portu kapat</button>
			<br>
			<button class="md" name="Turta4CH3On">3.portu ac</button>
            <br>
            <button class="md" name="Turta4CH3Off">3.portu kapat</button>
			<br>
			<button class="md" name="Turta4CH4On">4.portu ac</button>
            <br>
            <button class="md" name="Turta4CH4Off">4.portu kapat</button>
			<br>
	</form>


  </div>
</div>

</body>

</html>
