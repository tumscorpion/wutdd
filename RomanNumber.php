<?php 
claas RomanNumber
{
	public function convert($number)
	{
		$number = 50;
		$ces = 0;
		if ($number/100 <= 1){
			if($number==100){
				print("C");
			}else if($number==50){
				print("L");
			}else if($number>=6)&&($number<=8){
				for(int i=0;i<2;i++){
					print("V");
					for(int j=0;j<2;j++){
						print("I");
					}
				}
			}else if($number==5){
				print("V");
				
			}else if($number==4)
				print("IV");
			}
			else if(($number>=1)&&($number<=3&&)){
				print("I");
			}
		}
		
	}
}
 ?>