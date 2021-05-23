<!DOCTYPE html>

<?php

include "dbconnect.php";

if (isset($_POST['submit'])) {
	
 $counter = count($_FILES['file']['name']);

 for ($i=0; $i<$counter; $i++) { 
 	$fileName = $_FILES['file']['name'][$i];
 	// inserting file into database

 	$sql = "INSERT INTO fileupload (title,image) VALUES ('$fileName','$fileName')";

 	if ($conn->query($sql)===TRUE) {
 		
 		echo "file successfully Uploaded";
 	}else{
 		echo "unknown error occured";
 	}
         // moving file to its temporary location
 	$img_upload_path = 'upload/'.$fileName;
 	move_uploaded_file($_FILES['file']['tmp_name'][$i],$img_upload_path);

}
}

?>
<html>
<head>
	<title>multiple files upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data" >
 <div class="frmDronpDown">
 	<h2>FILE UPLOAD</h2>
 	<div class="row">
    
          <input type="file" name="file[]" id="file" multiple="">
        </div>
       
       <div class="row">
        <input type="submit" name="submit" value="Upload">
       </div>
 </div>
</form>

</body>
</html>