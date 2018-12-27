<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<p>How much are the dresses</p>
		<input type="text" name="number">
		<input type="submit" name="submit">
	</form>
	<?php 
		if (!empty($_POST)) {
			$number =$_POST['number'];
			echo "The dresses in the shop are: $number";
			$arr = [];
			for ($i=0; $i <$number ; $i++) { 
				$dec = rand(0,16777215);
				$hex = dechex($dec);
				$arr[]= $hex ;
			}
			echo "<pre>";
			var_dump($arr);
			echo "</pre>";


		for ($p=0; $p <$number ; $p++) { 
					
	$hex_array_value =$arr[$p];
	$r = substr("$hex_array_value", -6, 2 );
		//echo "<p>r = $r</p>";

	$g = substr("$hex_array_value", -4, 2);
		//echo "<p>g = $g</p>";

	$b = substr("$hex_array_value",  4 );
		//echo "<p>b = $b</p>";

$headec = hexdec("$hex_array_value");
//echo "<p>$headec </p>";
$r_hex = hexdec("$r");
		//echo "<p>hex r = $r_hex</p>";

	$g_hex =hexdec("$g");
		//echo "<p>hex g = $g_hex</p>";

	$b_hex = hexdec("$b");
		//echo "<p>hex b = $b_hex</p>";

if ($g_hex>$r_hex && $g_hex>$b_hex) {
	echo "$arr[$p]....";
}
}
		
	}
	?>
</body>
</html>
