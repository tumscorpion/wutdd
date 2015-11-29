<?php 
class CaptchaTest extends PHPUnit_Framework_TestCase
{
	public function testGetTextNumberWith6ReturnSix(){
		$captcha = new Captcha();
		$this->assertEquals('zero',$captcha->getTextNumber(0));
	}

	public function testSetRightOperandPattern1With5ReturnFive()
	{
		$captcha = new Captcha();
		$captcha->setPattern(1);
		$captcha->setRightOperand(5);
		$this->assertEquals('five',$captcha->getRightOperand());
	}
	public function testSetLeftOperandPattern1With3Return3()
	{
		$captcha = new Captcha();
		$captcha->setPattern(1);
		$captcha->setLeftOperand(3);
		$this->assertEquals(3,$captcha->getLeftOperand());
	}
	public function testSetRightOperandPattern2With4Return4()
	{
		$captcha = new Captcha();
		$captcha->setPattern(2);
		$captcha->setRightOperand(4);
		$this->assertEquals(4,$captcha->getRightOperand());
	}
	public function testSetLeftOperandPattern2With7ReturnSeven()
	{
		$captcha = new Captcha();
		$captcha->setPattern(2);
		$captcha->setLeftOperand(7);
		$this->assertEquals('seven',$captcha->getLeftOperand());
	}

	public function testGetOperator1ReturnPlusOperator()
	{
		$captcha = new Captcha();
		$captcha->setOperator(1);
		$this->assertEquals('+',$captcha->getOperator());
	}
	public function testGetOperator2ReturnMinusOperator()
	{
		$captcha = new Captcha();
		$captcha->setOperator(2);
		$this->assertEquals('-',$captcha->getOperator());
	}
	public function testResultPattern1Operator1(){
		$captcha = new Captcha();
		$captcha->setPattern(1);
		$captcha->setOperator(1);
		$captcha->setLeftOperand(2);
		$captcha->setRightOperand(1);
		$this->assertEquals('2 + one = ?',$captcha->getResultCaptcha());
	}
	public function testResultPattern2Operator1(){
		$captcha = new Captcha();
		$captcha->setPattern(2);
		$captcha->setOperator(1);
		$captcha->setLeftOperand(3);
		$captcha->setRightOperand(2);
		$this->assertEquals('three + 2 = ?',$captcha->getResultCaptcha());
	}
	public function testResultPattern1Operator2(){
		$captcha = new Captcha();
		$captcha->setPattern(1);
		$captcha->setOperator(2);
		$captcha->setLeftOperand(7);
		$captcha->setRightOperand(3);
		$this->assertEquals('7 - three = ?',$captcha->getResultCaptcha());
	}
	public function testResultPattern2Operator2(){
		$captcha = new Captcha();
		$captcha->setPattern(2);
		$captcha->setOperator(2);
		$captcha->setLeftOperand(7);
		$captcha->setRightOperand(3);
		$this->assertEquals('seven - 3 = ?',$captcha->getResultCaptcha());
	}

}
 ?>