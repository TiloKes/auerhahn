<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>
<style type="text/css">
.antwort {
	color: #00C;
	background-color: #C0B4F1;
	display: block;
	float: left;
	height: 120px;
	width: 10%;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 30px;
	border: 2px solid #00F;
	margin: 80px;
}
.startseite {
	color: #00C;
	background-color: #C0B4F1;
	display: block;
	float: left;
	height: 120px;
	width: 10%;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 30px;
	border: 2px solid #00F;
	margin: 80px;
	top: 384px;
}
.hintergrund {
	background-color: #DADBFC;
}
</style>
</head>

<body class="hintergrund">


<?php

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$betreff = $_POST['betreff'];
$nachricht = $_POST['comment'];
$antwort = $_POST['antwort'];
$emailname = $_POST['email'];

mail($_POST["email"],$_POST["betreff"],$_POST["antwort"], "FROM: " ."tilo-kessler@t-online.de");
mail("tilo-kessler@t-online.de",$_POST["betreff"],$_POST["comment"], "FROM: " .$_POST["email"]);


?>
<a href="index.html" class="antwort"><?php echo "Hallo<br/><br/> $vorname $nachname <br/><br/>"; echo "Danke für Ihre Nachricht.<br/><br/>";?></a>  
<a href="index.html" class="startseite"><br/><br/>Zurück zur Startseite</a>  
  

</body>
</html>