<?php 
require_once("random.php");
class CaptchaTest extends PHPUnit_Framework_TestCase
{
	// private captcha;
	public function setUp(){
		$this->captcha = new Captcha();
	}
	public function testGetTextNumberWith6ReturnSix(){
		
		$this->assertEquals('zero',$this->captcha->getTextNumber(0));
	}

	public function testSetRightOperandPattern1With5ReturnFive()
	{
		
		$this->captcha->setPattern(1);
		$this->captcha->setRightOperand(5);
		$this->assertEquals('five',$this->captcha->getRightOperand());
	}
	public function testSetLeftOperandPattern1With3Return3()
	{
		
		$this->captcha->setPattern(1);
		$this->captcha->setLeftOperand(3);
		$this->assertEquals(3,$this->captcha->getLeftOperand());
	}
	public function testSetRightOperandPattern2With4Return4()
	{
		
		$this->captcha->setPattern(2);
		$this->captcha->setRightOperand(4);
		$this->assertEquals(4,$this->captcha->getRightOperand());
	}
	public function testSetLeftOperandPattern2With7ReturnSeven()
	{
		
		$this->captcha->setPattern(2);
		$this->captcha->setLeftOperand(7);
		$this->assertEquals('seven',$this->captcha->getLeftOperand());
	}

	public function testGetOperator1ReturnPlusOperator()
	{
		
		$this->captcha->setOperator(1);
		$this->assertEquals('+',$this->captcha->getOperator());
	}
	public function testGetOperator2ReturnMinusOperator()
	{
		
		$this->captcha->setOperator(2);
		$this->assertEquals('-',$this->captcha->getOperator());
	}
	public function testResultPattern1Operator1(){
		
		$this->captcha->setPattern(1);
		$this->captcha->setOperator(1);
		$this->captcha->setLeftOperand(2);
		$this->captcha->setRightOperand(1);
		$this->assertEquals('2 + one = ?',$this->captcha->getQuesttionCaptcha());
	}
	public function testResultPattern2Operator1(){
		
		$this->captcha->setPattern(2);
		$this->captcha->setOperator(1);
		$this->captcha->setLeftOperand(3);
		$this->captcha->setRightOperand(2);
		$this->assertEquals('three + 2 = ?',$this->captcha->getQuesttionCaptcha());
	}
	public function testResultPattern1Operator2(){
		
		$this->captcha->setPattern(1);
		$this->captcha->setOperator(2);
		$this->captcha->setLeftOperand(7);
		$this->captcha->setRightOperand(3);
		$this->assertEquals('7 - three = ?',$this->captcha->getQuesttionCaptcha());
	}
	public function testResultPattern2Operator2(){
		
		$this->captcha->setPattern(2);
		$this->captcha->setOperator(2);
		$this->captcha->setLeftOperand(7);
		$this->captcha->setRightOperand(3);
		$this->assertEquals('seven - 3 = ?',$this->captcha->getQuesttionCaptcha());
	}
	public function testGenerateCaptchaPattern1OperatorType1(){
		
		$random_mock = $this->getMockBuilder('Random')->getMock();
		$random_mock->method('randomPattern')->willReturn(1);
		$random_mock->method('randomOperator')->willReturn(1);
		$random_mock->method('randomOperand')->willReturn(4);
		$this->captcha->generate($random_mock);
		$this->assertEquals('4 + four = ?',$this->captcha->getQuesttionCaptcha());
	}
	

	// public function testMockRandomPatternShouldReturn1()
	// {
	// 		$captcha_mock = $this->getMockBuilder('Captcha')->getMock();
	// 		$captcha_mock->method('randomPattern')->willReturn(1);
	// 		$this->assertEquals(1,$captcha_mock->randomPattern());
	// }
	// public function testMockRandomPatternShouldReturn7()
	// {
	// 		$captcha_mock = $this->getMockBuilder('Captcha')->getMock();
	// 		$captcha_mock->method('randomPattern')->willReturn(7);
	// 		$this->assertEquals(7,$captcha_mock->randomPattern());
	// }
}
 ?>