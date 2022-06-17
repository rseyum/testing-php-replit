<?php
//calculator_test2.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase {
	function testAdd() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->add(1,1), 2, "1 + 1");
	  $this->assertEqual($myCalc->add(2,2), 4, "2 + 2");
	  $this->assertEqual($myCalc->add(1), 1, "One params");
	}
}