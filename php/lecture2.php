<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Lecture 2 - Operator</title>
</head>
<body>
	

	<?php 


		// Arithmetic Operators

		$x = 20;
		echo $x + 5;
		echo 2 + 6; echo "<br>";
		echo 2 - 6; echo "<br>";
		echo 2 * 6; echo "<br>";
		echo 2 / 6; echo "<br>";
		echo 2 % 6; echo "<br>";



		$count = 20; echo "<br>";
		echo --$count;
		echo "<br>";
		echo $count;


		$y = 10;

		$y += 20; // $y = $y + 20;


		$msg1 = "Hi sir ";
	 //    $msg2 = "how are you";
		// $msg1 .= $msg2;

		// $msg1 .= " asdasd";
		// $msg1 .= " asasdasd asd as d";
		//  echo $msg1;


		echo '$msg1 how are you' . " " 
		. 12312 . 
		" " . "asdas 
		as d";

		echo "<br>";
		// echo 5 >= 5;

		// echo true;


		$marks = 77;

		if($marks >= 85){
			echo 4 . " GPA";
		}


		echo "hi whats
		 is\" 

		 your\r\nna\tme


		 asdasd

		 asdasd";

		// echo 'hi whats is\' your name';


echo "
asdasjdkas
das
d
asdfsd
fs
df
sdsd
as
das
d
$marks
";
define("Z",123);

echo Z;
echo __FiLE__;
// 	$num1 = 23456754334;

// echo substr($num1, 0,5);

	// echo $num1 + 50;


	?>
</body>
</html>