<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Second version</title>
</head>
<body>
<div>
	<form action="" method="post">
		<p>How much are the dresses</p>
		<input type="text" name="number">
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php 
		if (!empty($_POST)) {
			$number =$_POST['number'];
			echo "The dresses in the shop are: $number";
			$arr = [];
			for ($i=0; $i <$number ; $i++) { 
				$dec_second_way = rand(0,16777215);
				$hex_second_way = dechex($dec_second_way );
				$arr[]= $hex_second_way ;
			}
			echo "<pre>";
			var_dump($arr);
			echo "</pre>";


		for ($p=0; $p <$number ; $p++) { 
					
	$hex_array_value_second_way =$arr[$p];
	$r_second_way = substr("$hex_array_value_second_way", -6, 2 );

	$g_second_way = substr("$hex_array_value_second_way", -4, 2);

	$b_second_way = substr("$hex_array_value_second_way",  4 );

	$headec_second_way = hexdec("$hex_array_value_second_way");
	$r_hex_second_way = hexdec("$r_second_way");

	$g_hex_second_way =hexdec("$g_second_way");

	$b_hex_second_way = hexdec("$b_second_way");



$hex_length_second_way = strlen($arr[$p]);
		if ($hex_length_second_way!=6) {
			echo "<p>Not a valid input $arr[$p] and index = $p</p>";
		}else{
		if ($g_hex_second_way>$r_hex_second_way && $g_hex_second_way>$b_hex_second_way) {
			echo "<p>Your dress hex code is $arr[$p] and it is number 'index' in the shop = $p</p>";
		}
	}
}
}
		
	


	?>
	<img src="images/3dmodeldress.gif"alt="3dmodel">
	<hr>
	<a href="index.php">See the first version</a>
	<a href="third_version.php">See the third version</a>
</div>
</body>
</html>