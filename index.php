<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		<input type="submit" name="submit1" value="Reset">
	</form>
	<div>

	<?php

	if (!empty($_POST)) {
		$hex_with_or_without_whitespaces =$_POST['hex'];
		$hex = trim($hex_with_or_without_whitespaces);
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
		$hex_length = strlen($hex);
		if ($hex_length!=6) {
			echo "<p>Not a valid input</p>";
		}else{
		if ($g_hex>$r_hex && $g_hex>$b_hex) {
			echo "<p>This dress is appropriate. Congratulations Diana!</p>";
		}else{
			echo "<p class='answer'>Sorry, Diana but you have to try another one.</p>";
		}
	}
}
if (isset($_POST['submit1']))
{
   myfnc();
}
function myfnc()
{
	unset($r);
	unset($g);
	unset($b);
	unset($r_hex);
	unset($g_hex);
	unset($b_hex);

}
	?>
	<img src="images/greendress.gif" alt="turningdress">
	<hr>
	<a href="second_version.php">See the second version</a>
	<a href="third_version.php">See the third version</a>
</div>



</body>
</html>