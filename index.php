<?php
	echo "hello world";
	echo "<h1>Title</h1>";

	echo 'hello world';
	echo '<h1>Title</h1>';

	// Bien
	// Khai bao
	$a = 'abc';
	$number = 123;

	// echo "Gia tri cua bien a: $a <br>";
	// echo '$number';

	$number1 = 100;
	$number2 = 3000;
	$string1 = "10abc";
	$string2 = "abc123";

	// $sum1 = $number1 + $number2;
	// // $sum2 = $number1 + $string1;
	// $sum3 = $number2 + $string2;
	// $sum4 = $string1 + $string2;

	// echo "$sum1 <br>";
	// echo "$sum3 <br>";
	// echo "$sum4 <br>";
	// echo $string1 . $string2;

	// Tham tri
	$newVariable;
	$newVariable = $number2;

	$newVariable = $number2 + 10;
	echo "Tham tri";
	echo "$number2  $newVariable";

	// Tham chieu
	echo "<br>Tham chieu";
	$newVariable2;
	$newVariable2 = &$number1;
	echo "$number1   $newVariable2  ";
	$newVariable2 = 200;
	echo "$number1   $newVariable2";

	// Ep kieu
	$changeType1 = (float) $string1;
	$changeType2 = (float) $string2;
	echo "<br>$changeType1   $changeType2";

	// Boolean
	$var1 = true;
	$var2 = false;

	$var3 = null;

	// array
	$array = [1, 2, 3, 4, 'abc'];
	echo "Gia tri cua phan tu vi tri thu 4:" . $array[4];

	// Hang so
	echo "Hang so";
	define("MALE", 1);
	define("FEMALE", 2);
	echo FEMALE;
	echo "Gioi tinh nam: MALE, nu: FEMALE";
?>
