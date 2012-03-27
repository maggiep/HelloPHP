<doctype !html>
<html>
<head>
<title>Homework_1</title>
</head>
<body>
<?php
if (is_numeric($_GET["number"])) {	

	if (!($_GET["number"] >= 0 & $_GET["number"] <= 19999)) {
		echo '<font color="red">' . "The parameter is not within the range [0, 19999]." . '</font><br>';
	}

	if (is_prime($_GET["number"])) {
		echo "The number " . $_GET["number"] . " is prime.";
	} 
	else {
		echo '<font color="blue">' . "The number " . $_GET["number"] . " is NOT prime." . '</font><br>'; 
	}	
}
else {
	echo '<font color="red">' . "The parameter is not a number." . '</font><br>';	
}

function is_prime($number) {
	if ($number < 2) { 
		return FALSE;
	}
	for ($i = 2; $i <= ($number / 2); $i ++) {
		if($number % $i == 0) { 
			return FALSE;
		}
	}
	return TRUE;
}
?>
</body>
</html>