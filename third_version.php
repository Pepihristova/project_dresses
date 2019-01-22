<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Third version</title>
</head>
<body>
<div>
	<form action="" method="post">
		<p>What are the hex codes of the dresses the dresses? Write them with "," and interval</p>
		<input type="text" name="color">
		<input type="submit" name="submit" value="Submit">
		<input type="submit" name="submit2" value="Reset">
	</form>
	<?php 
		if (!empty($_POST)) {
			$color_with_or_without_whitespaces =$_POST['color'];
		$color = trim($color_with_or_without_whitespaces);
			$array = explode(', ', $color);
			echo "<pre>";
			var_dump($array);
			echo "</pre>";
			$array_count = count($array);
			echo "$array_count...";
		for ($b=0; $b <$array_count ; $b++) { 
				//$dec_third_way = $array[$b];
				//$hex_third_way = dechex($dec_third_way );
	$hex_array_value_third_way =$array[$b];
	$r_third_way = substr("$hex_array_value_third_way", -6, 2 );

	$g_third_way = substr("$hex_array_value_third_way", -4, 2);

	$b_third_way = substr("$hex_array_value_third_way",  4 );

	$headec_third_way = hexdec("$hex_array_value_third_way");
	$r_hex_third_way = hexdec("$r_third_way");

	$g_hex_third_way =hexdec("$g_third_way");

	$b_hex_third_way = hexdec("$b_third_way");
	$current_length = strlen($hex_array_value_third_way);
	if ($array[$b]==6 ) {
		echo "Not a valid input";
	}else{

$hex_length = strlen($array[$b]);
		if ($hex_length!=6) {
			echo "<p>Not a valid input $array[$b] and index = $b</p>";
		}else{
		if ($g_hex_third_way>$r_hex_third_way && $g_hex_third_way>$b_hex_third_way) {
			echo "<p>Your dress hex code is $array[$b] and it is number 'index' in the shop = $b</p>";
		}
	}
}
}
}
if (isset($_POST['submit2']))
{
   myfnc_thirdway();
}
function myfnc_thirdway()
{
	reset($array);

}
	?>
	<img src="images/changecolordress.gif">
	<hr>
	<a href="index.php">See the first version</a>
	<a href="second_version.php">See the second version</a>
</div>
</body>
</html>