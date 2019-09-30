<?php 
	echo "Welke operatie wil je uitvoeren? (+ of -)\n";
	$operator = rtrim(fgets(STDIN));
	if ($operator == '+' || $operator == '-'){
		echo "Eerste getal?\n";
		$number1 = rtrim(fgets(STDIN));
		echo "Tweede getal?\n";
		$number2 = rtrim(fgets(STDIN));
		$number3 = $number1 + $number2;
		$number4 = $number1 - $number2;
		if ($operator == '+')
			echo "Uw resultaat is: " . $number3;
		else
			echo "Uw resultaat is: " . $number4;
	}
	else
		echo "Dat is geen toegestaande operator";
?>