<?php
	$number1 = 16;
	$number2 = 20;
	$total = $number1+$number2;
	$difference = $number1-$number2;
	$bolum = $number1/$number2;
	$multiplication = $number1*$number2;
	$remainder = $number1%$number2; 
	$square_root = sqrt($number1);
	echo "Number 1:$number1 <br>";
	echo "Number 2 :$number2<br>"; 
	echo "Number Total:$total <br>";
	echo "Difference:$difference <br>"; 
	echo "Böl:$bolum <br>"; 
	echo "Multiplication:$multiplication <br>";
	echo "Remainder:$remainder <br>"; 
	echo "Square Root:$square_root <br>";
	echo "Power (2 power 3) :".pow(2,3)."<br>";
	echo "Absolute value of Number 1:".abs($number1)."<br>";
	echo "Absolute value of Number 2:".abs($number2)."<br>";
	echo "Which one is smaller ? :".min($number1,$number2)."<br>";
	echo "Which one is bigger ? :".max($number1,$number2)."<br>";
?>