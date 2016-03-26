<?php

echo fileowner('file_permissions.php')."<br/>";
//if we have Posix installed
$owner_id = fileowner('file_permissions.php');
echo $owner_id."<br/>";
//$owner_array = posix_getpwuid($owner_id);
//echo $owner_array['name']."<br/>";;

echo fileperms('file_permissions.php')."<br/>";
echo decoct(fileperms('file_permissions.php'))."<br/>";
echo decoct(fileperms('file_permissions.php'))."<br/>";
echo substr(decoct(fileperms('file_permissions.php')),2)."<br/>";
chmod('file_permissions.php',0777);
echo substr(decoct(fileperms('file_permissions.php')),2)."<br/>";


echo "<br/>";
echo is_readable('file_permissions.php') ? 'yes' : 'no';
echo "<br/>";
echo is_writable('file_permissions.php')? 'yes' : 'no';
echo "<br/>";
?>