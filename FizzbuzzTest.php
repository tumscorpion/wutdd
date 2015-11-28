<?php
class FizzbuzzTest extends PHPUnit_Framework_TestCase
{
   public function testEnter1Return1()
   {
        $expected = 1;
        $result = FizzBuzz::receive(1);
        $this->assertEquals($expected,$result);
   }
   public function testEnter3ReturnFizz()
   {
        $expected = "Fizz";
        $result = FizzBuzz::receive(3);
        $this->assertEquals($expected,$result);
   }
   public function testEnter5ReturnFizz()
   {
        $expected = "Buzz";
        $result = FizzBuzz::receive(5);
        $this->assertEquals($expected,$result);
   }
   public function testEnter15ReturnFizz()
   {
        $expected = "FizzBuzz";
        $result = FizzBuzz::receive(15);
        $this->assertEquals($expected,$result);
   }
   public function testEnter2ReturnFizz()
   {
        $expected = "2";
        $result = FizzBuzz::receive(2);
        $this->assertEquals($expected,$result);
   }
   public function testEntermi3ReturnFizz()
   {
        $expected = "Fizz";
        $result = FizzBuzz::receive(-3);
        $this->assertEquals($expected,$result);
   }
}
?>