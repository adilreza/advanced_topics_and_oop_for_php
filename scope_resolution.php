<?php

	class Scope_resolution
	{
		public static $adilStatic = "Hello world";
		public $adilStatic2 = "adil static 2";

		public function addNumber($number1, $number2)
		{
			$result = $number2 + $number1;

			return $result;
		}

		public static function multiplier($number1, $number2)
		{
			$result = $number2 * $number1;

			return $result;

		}


	}


	$testObject = new Scope_resolution();

	$getResult = Scope_resolution::addNumber(12,13);

	echo $getResult;
	echo "<br/>";

	echo Scope_resolution::multiplier(12,13);

	echo "<br>"."-------------------------------------------------------------"."<br>";
	echo $testObject->addNumber(2,4);
	echo "<br>";
	echo $testObject->multiplier(4,5);

	echo "<br>".".....Static properties cannot be accessed through the object using the arrow operator ->.-------"."<br>";

	//echo $testObject->adilStatic;

	echo $testObject->adilStatic2;


	
	

?>