<html>
	<head>
		<title>Image_Uploader</title>
	</head>
	<body>
		<form method = "post" enctype = "multipart/form-data">
			<input type = "file" name = "file"/> 
			<br/>
			<br/>
			Note : Only .png, .jpg, .jpeg, .gif file Supported.
			<br/>
			<br/>
			<input type = "submit" name = "Submit" value = "Submit"/>
		</form>	
	</body>

<?php

	$target_dir = "Uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

	// Check if file already exists
	if (file_exists($target_file)) 
	{
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	
	// Check file size
	if ($_FILES["file"]["size"] > 2000000) 
	{
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") 
	{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		
	} else {
		
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
		{
			echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		} 
		else 
		{
			echo "Sorry, there was an error uploading your file.";
		}
		
	}
	
?>