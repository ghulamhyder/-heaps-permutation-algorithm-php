<?php

	function permi($str){

		 $arr=str_split($str);
		 $a=10;
		
		function swap($a,$b,&$arr){

			//global $a;
			//print_r($arr);exit;
			
			$temp=$arr[$a];
			$arr[$a]=$arr[$b];
			$arr[$b]=$temp;
		}
		

	function generate($n,$arr){

		if($n===1){
			echo join('',$arr)."<br>";
		} else {

			for($i=0; $i!=$n; $i++){

				generate($n-1,$arr);
				swap($n % 2===0 ? 0 : $i,$n-1,$arr);

			}
		}


	}//endfunc

	generate(count($arr),$arr);
}

echo "<pre>";
print_r(permi('abc'));
echo "</pre>";exit;




?>