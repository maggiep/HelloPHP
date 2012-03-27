<doctype !html>
<html>
<head>
<title>Homework_2</title>
</head>
<body>
<?php
$arr = range(20, 1000, 37);
find_3_prime($arr);
check_exist(146, $arr);
check_exist(284, $arr);
check_exist(871, $arr);

function find_3_prime($arr) {
	$i = 0;
	foreach($arr as $value) {
		if (is_prime($value)) {
			$i ++;
			if ($i == 3) {
				echo $value . "<br>\n";
			}
		}
	}
}

function check_exist($numb, $arr) {
	if(in_array($numb, $arr)) {
		echo "The number $numb exist in the array." . "<br>\n";
	}
	else {
		echo "The number $numb does not exist in the array." . "<br>\n";
	}
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