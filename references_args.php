<!doctype html>
<html>
<head>
    <title>Reference as function arguments</title>
   
 
    
</head>

<body>
	<?php

		//Function references 
		function ref_test(&$var){

			$var = $var * 2;

		}
		$a = 10;
		ref_test($a);
		echo $a;

		echo"<hr/>";

		
		//Function global
		function glo_test(){
			global $a;

			$a = $a * 2;


		}
		$a = 10;
		glo_test();
		echo $a;



	?>

</body>
</html>