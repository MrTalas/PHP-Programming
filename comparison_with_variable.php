<?php
	$number1 = 10;
	$number2 = 20;
	$number3 = 20;
	$control = $number1 == $number2 ? "Numbers (10 or 20) is equal !" : "Numbers (10 or 20) is not equal !";
	$control2 = $number2 == $number3 ? "Numbers (20 or 20) is equal !" : "Numbers (20 or 20) is not equal !";
	$control3 = $number1 < $number2 ? "Number 1 (10) is smaller than Number 2 (20)" : "Number 1 (10) is not smaller than Number 2 (20)";
	$control3 = $number1 > $number2 ? "Number 1 (10) is greater than Number 2 (20)" : "Number 1 (10) is not greater than Number 2 (20)"; 
	echo "$control <br> $control2 <br> $control3";
?>