<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<p>What are the dress codes of the dresses the dresses? Write them with "," and interval</p>
		<input type="text" name="color">
		<input type="submit" name="submit">
	</form>
	<?php 
		if (!empty($_POST)) {
			$color =$_POST['color'];
			$array = explode(', ', $color);
			echo "<pre>";
			var_dump($array);
			echo "</pre>";
			$array_count = count($array);
			echo "$array_count...";
		for ($p=0; $p <$array_count ; $p++) { 
				$dec_third_way = $array[$p];
				$hex_third_way = dechex($dec_third_way );
	$hex_array_value_third_way =$array[$p];
	$r_third_way = substr("$hex_array_value_third_way", -6, 2 );

	$g_third_way = substr("$hex_array_value_third_way", -4, 2);

	$b_third_way = substr("$hex_array_value_third_way",  4 );

	$headec_third_way = hexdec("$hex_array_value_third_way");
	$r_hex_third_way = hexdec("$r_third_way");

	$g_hex_third_way =hexdec("$g_third_way");

	$b_hex_third_way = hexdec("$b_third_way");
if ($g_hex_third_way>$r_hex_third_way && $g_hex_third_way>$b_hex_third_way) {
	
	echo "<p>$array[$p]....index = $p</p>";
	

}
}
		
	}


	?>
</body>
</html>
