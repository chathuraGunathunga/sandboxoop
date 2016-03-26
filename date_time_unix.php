<!doctype html>
<html>
<head>
    <title>Dates and Times: Unix</title>
    
</head>

<body>
    

<?php 

echo time();//current time
//mktime($hr,$min,$sec,$mo,$day,$yr);
echo"<br/>";
	echo mktime(2,30,45,10,1,2016);
echo"<br/>";
// checkdate()
echo checkdate(12, 31, 2000) ? 'true':'false';
echo"<br/>";
echo checkdate(2,31,2000) ? 'true' :'false';
echo"<br/>";

//strtotime($any_string);

//$unix_timestamp = strtotime("now");
$unix_timestamp = strtotime("15 September 2004");
echo $unix_timestamp."<br/>";

?>

</body>
</html>