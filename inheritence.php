<?php

	// The idea of inheritance powerful. It allows you to create a new class that reuses the properties and methods from an existing class. #collected

	class parent_class
	{
		private $var1 = "alex(private) is a cute girls";
		public $var2 = "bob(public) hates adil for adil's stupidness";
		protected $var3 ="rahim(protected) loves alex bt alex loves adil";

		public function message_1()
		{

			echo $this->var1;

		}

		public function message_2()
		{
			echo $this->var3;
		}

	}

	class child_class extends parent_class
	{

		public function message_3()
		{
			echo $this->var2;
			echo "<br>";
			echo $this->var3;
			echo "<br>";
			//echo $this->var1; as private so not sharable
			//--------------------------
			//but another way to access this visibility
			$this->message_1();
			echo "<br>";
			$this->message_2();

		}

	}


	$objectTest = new child_class();

	$objectTest->message_3();



?>
