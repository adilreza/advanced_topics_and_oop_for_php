<?php

    class hello_world
    {
        private $var1="";
        private $result="";
        public $container;

        private function addSpace()
        {
            $this->result = $this->var1." ";
        }

        public function add_world($tak)
        {
            $this->addSpace();
            $this->result = $this->result.$tak;

            $container = $this->result;

            //echo $container;

            return $this->result;
        }

        public function __construct()
        {
            $this->var1 = "Hello";
        }
    }


    $makObject = new hello_world();

    $opphello = $makObject->add_world("world");

    echo $opphello;


?>