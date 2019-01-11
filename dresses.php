<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="indexcss.css">
	<title>Dresses</title>
</head>
<body>
	<form method="post" action="" >
		<p>Choose color</p>
		<p><a href="https://www.rapidtables.com/web/color/html-color-codes.html"> <span class="red">C</span><span class="green">l</span><span class="blue">i</span><span class="pink">c</span><span class="orange">k</span><span class="gray"> h</span><span class="black">e</span><span class="purple">r</span><span class="brown">e</span></a></p>
		<p>Put the hex code here</p>
		<input type="text" name="hex">
		<p>Press submit and see whether the dress is appropriate</p>
		<input type="submit" name="submit" value="Submit">
	</form>
	<div><?php

if (!empty($_POST)) {
	$hex =$_POST['hex'];
	$r = substr("$hex", -6, 2 );
		echo "<p>r = $r</p>";

	$g = substr("$hex", -4, 2);
		echo "<p>g = $g</p>";

	$b = substr("$hex",  4 );
		echo "<p>b = $b</p>";


	$r_hex = hexdec("$r");
		echo "<p>hex r = $r_hex</p>";

	$g_hex =hexdec("$g");
		echo "<p>hex g = $g_hex</p>";

	$b_hex = hexdec("$b");
		echo "<p>hex b = $b_hex</p>";

if ($g_hex>$r_hex && $g_hex>$b_hex) {
	echo "<p>This dress is appropriate. Congratulations Diana!</p>";
}else{
	echo "<p class='answer'>Sorry, Diana but you have to try another one.</p>";
}
}

?>
		<img src="images/greendress.gif" alt="turningdress">
		<hr>
	</div>
	<div>
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
				$dec_second_way = rand(0,16777215);
				$hex_second_way = dechex($dec_second_way  );
				$arr[]= $hex_second_way ;
			}
			echo "<pre>";
			var_dump($arr);
			echo "</pre>";


		for ($p=0; $p <$number ; $p++) { 
					
	$hex_array_value_second_way =$arr[$p];
	$r_second_way = substr("$hex_array_value_second_way ", -6, 2 );

	$g_second_way = substr("$hex_array_value_second_way e", -4, 2);

	$b_second_way = substr("$hex_array_value_second_way ",  4 );

	$headec_second_way = hexdec("$hex_array_value_second_way ");
	$r_hex_second_way = hexdec("$r_second_way");

	$g_hex_second_way =hexdec("$g_second_way");

	$b_hex_second_way = hexdec("$b_second_way");
if ($g_hex_second_way>$r_hex_second_way && $g_hex_second_way>$b_hex_second_way) {
	
	echo "<p>$arr[$p]....</p>";
	

}
}
		
	}


	?>
	<img src="images/3dmodeldress.gif"alt="3dmodel">
	<hr>
	</div>

</body>
</html>