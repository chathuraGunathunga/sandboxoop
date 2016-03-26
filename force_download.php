<?php

if(isset($_POST['file_name'])){
	$file = $_POST['file_name'];
	header('Content-type : audio/mpeg3');
	header('Content-Disposition : attachement; filename="'.$file.'"');
	readfile('mystery_folder/'.$file);
	exit();

}

?>

<form action="force_download.php" method="post" name="downloadform">
	<input type="hidden" name="file_name" value="Sasara_Wasana_Thuru.mp3">
	<input type="submit" value="Download the MP3">
</form>