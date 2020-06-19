<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Bejajar PHP - Variable | Tefa.com</title>
  <meta name="description" content="Web Development Teaching Factory">
  <meta name="author" content="Tefa">

</head>
<body>
	<h1>Variabel dan Tipe Data</h1>
	<?php
	$hex_biru   = 0x0000FF;		//Hexadecimal integer
	$nama		= "Brando";		//string
	$pi 		= 3.14;			//float
	$is_done    = false;		//Boolean
	$null		= NULL; 
	?>

	<ul>
		<li>Integer <?php echo $hex_biru;?></li>
		<li>String <?php echo $nama;?></li>
		<li>Float <?php echo $pi;?></li>
		<li>Boolean <?php echo $is_done;?></li>
		<li>Null <?php echo $null;?></li>
	</ul>
</body>
</html>

