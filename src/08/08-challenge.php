<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bejajar PHP - Swith..Case | Tefa.com</title>
  <meta name="description" content="Web Development Teaching Factory">
  <meta name="author" content="Tefa">

</head>
<body>
<h1>Switch..Case</h1>
<hr />  

<?php
$badge = "";
$total_belanja = 35000;
switch ($total_belanja) {
	case ($total_belanja <100000):
		$badge = "Bronze";
		break;
	
	case ($total_belanja >100000 && $total_belanja <=1000000):
		$badge = "Silver";
		break;
	
	case ($total_belanja >1000000 && $total_belanja <=5000000 ):
		$badge = "Gold";
		break;
	
	case ($total_belanja >5000000 ):
	default:
		$badge = "Platinum";
		break;
}
?>

<code> 
	<pre>
$badge = ""; 
$total_belanja = 35000; 
switch ($total_belanja) { 
	case ($total_belanja <100000): 
		$badge = "Bronze"; 
		break;
	
	case ($total_belanja >100000 && $total_belanja <=1000000):
		$badge = "Silver";
		break;
	
	case ($total_belanja >1000000 && $total_belanja <=5000000 ):
		$badge = "Gold";
		break;
	
	case ($total_belanja >5000000 ):
	default:
		$badge = "Platinum";
		break;
}

Total belanja: <?php echo $total_belanja;?> 
Badge: <?php echo $badge;?> 
	</pre>
</code>
</body>
</html>