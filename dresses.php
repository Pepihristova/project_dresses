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
		<img src="images/greendress.gif">
	</div>

	

</body>
</html>