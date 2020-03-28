<?php

require "vendor/autoload.php";
require "index.php";


class test extends PHPUnit\Framework\TestCase
{

	function test1(){

		$this->assertEquals(Multiples3x(3),"Fizz");
		$this->assertEquals(Multiples3x(5),"Buzz");
		$this->assertEquals(Multiples3x(15),"FizzBuzz");

	}

}







?>