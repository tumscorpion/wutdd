<?php
class Fizzbuzz
{
    public static function receive($num){
    	$Result = $num;

    	if(($num%5==0)&&($num%3==0)){
    		$Result = "FizzBuzz";
    	}else if($num%5==0){
    		$Result = "Buzz";
    	}else if($num%3==0){
    		$Result = "Fizz";
    	}
    	return $Result;
    }
}

?>