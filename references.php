<!doctype html>
<html>
<head>
    <title>Reference Assignment</title>
   
 
    
</head>

<body>
	<?php

		$a = 1;
		$b = $a;
		$b = 2;
		echo "a:{$a} / b:{$b}<br/>";
		// returns 1/2


  
		$a = 1;
		$b =& $a;//b is point to a,b is rference a, b is short cut to a
		$b = 2;
		echo "a:{$a} / b:{$b}<br/>";
		// returns 2/2

		unset($b);
		echo "a:{$a} / b:{$b}<br/>";

	?>

</body>
</html>