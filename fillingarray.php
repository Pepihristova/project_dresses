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

	$g = substr("$hex_array_value", -4, 2);

	$b = substr("$hex_array_value",  4 );

	$headec = hexdec("$hex_array_value");
	$r_hex = hexdec("$r");

	$g_hex =hexdec("$g");

	$b_hex = hexdec("$b");
if ($g_hex>$r_hex && $g_hex>$b_hex) {
	
	echo "$arr[$p]....";
	

}
}
		
	}
	?>
</body>
</html>
