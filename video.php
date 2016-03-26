<!doctype html>
<html>
<head>
    <title>Basic</title>
   
    <!-- Bootstrap -->
    
</head>

<body>


	<video width="420" height="236" controls preload="true">
    <source src="uploads/'Perum Puragena' Song By. Senanayaka Weraliyadda.mp4" type="video/mp4" />
    </video><br/>
    
      <?php
      echo mime_content_type("mystery_folder/'Perum Puragena' Song By. Senanayaka Weraliyadda.mp4"); 

	if(isset($_POST['file_name'])){
	$file = $_POST['file_name'];
	header('Content-type :video/mp4');
	header('Content-Disposition : attachement; filename="'.$file.'"');
	readfile('mystery_folder/'.$file);
	exit();

	}

?>

<form action="download.php" method="post" name="downloadform">
	<input type="hidden" name="file_name" value="'Perum Puragena' Song By. Senanayaka Weraliyadda.mp4">
	<input type="submit" value="Download the MP4">
</form>


   
    
    <audio width="420" height="236" controls preload="true">
    	<source src="uploads/Sasara_Wasana_Thuru.mp3" type="audio/mp3" />
    </audio>	<br/>
    <?php

	if(isset($_POST['file_name'])){
	$file = $_POST['file_name'];
	header('Content-type : audio/mpeg3');
	header('Content-Disposition : attachement; filename="'.$file.'"');
	readfile('mystery_folder/'.$file);
	exit();

	}

?>

<form action="video.php" method="post" name="downloadform">
	<input type="hidden" name="file_name" value="Sasara_Wasana_Thuru.mp3">
	<input type="submit" value="Download the MP3">
</form>
<!-- javascript -->
</body>
</html>