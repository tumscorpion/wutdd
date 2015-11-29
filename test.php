<?php 
require_once("random.php");
require_once("Captcha.php");
$captcha = new Captcha();
$captcha->generate(new Random());
echo $captcha->getQuesttionCaptcha()."\n";

 ?>