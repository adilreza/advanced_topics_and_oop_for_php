<?php

	class constructor_overloading_test
	{
		private $var1 = "private variable var1"."\n";
		public $var2 = "public variable var2"."\n";

		private function dummyText()
		{
			return "This text from the dummy private function ";
		}

		public function __construct()
		{
			$getdummy = $this->dummyText();

			$no_of_variable = func_num_args();

			//$all_arg = func_get_args();

			if($no_of_variable==1)
			{
				$this->__construct1(6);
			}
			if($no_of_variable==2)
			{
				$this->__construct2(12,88);
			}

		}

		public function __construct1($number)
		{
			echo "this is from one variable constructor: ".$number;
			echo "<br>";
		}

		public function __construct2($number1, $number2)
		{
			echo "ths is from two variable contructor : - ".$number2*$number1;
			echo "\n";
		}



	}


	$objectTest = new constructor_overloading_test(3);
	//$objectTest2= new constructor_overloading_test(12,5);





?>