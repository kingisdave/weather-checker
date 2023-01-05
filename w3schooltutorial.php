<!DOCTYPE html>
<html>
<head>
	<title>W3Schools Tutor</title>
</head>
<body>
	<h1>My First PHP page</h1>
	<button onclick="myTest()">Tester</button>
	<!-- <button onclick="mineTest()">Tesitier</button> -->
	<?php
	// As you can see that this almost my first personal tutored php.
	#  still on my almost first personal tutored php.
	/*
		This is for the multiple lines
		of codes 
	*/	
	// 	Every keyword expressions in php are not case-sensitive.

		Echo "Hello to the world of Programming!<br>";

		$x = 5 + 5;
		echo $x . "<br>";
//	While all the variable names in php are case-sensitive.
		$color = "red";
		echo "My car is " . $color . "<br>";
		//echo "My car is " . $Color . "<br>";// this variable in the code will not function in php

		// global scope
		$txta = "Hallo People!!!";
		$x = 50; 
		$y = 1000.5;
		echo $txta . "Come and collect ". ($y * $x) ." if you can invest your $x in Programming. Thanks alot!!!.";



		function myTest() {
		    // using x inside this function will generate an error
		    echo "<p>Variable x inside function is: $x</p>";
		} 
		myTest();

		echo "<p>Variable x outside function is: $x</p>";

		echo strlen("Hello Mr Programmer!"); // outputs 12
		echo "<br>";
		echo strlen(" ");
		echo "<br>";
		echo str_word_count("Hello Mr Programmer!");
	?>
</body>
</html>