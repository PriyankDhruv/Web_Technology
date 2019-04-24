<html>
	<head>
		<title>Read_Write_FileOperator</title>
	</head>
	<body>
		<center>
			<fieldset style = "width:15%">
				<form method = "post">
					<input type = "text" name = "file_name_holder" placeholder = "Enter file Name"/>
					<br/>
					<br/>
					<div style = "text-align:left">
						<input type = "radio" name = "file_Opn" value = "read">Read
					</div>
					<br/>
					<br/>
					<div style = "text-align:left">
						<input type = "radio" name = "file_Opn" value = "write">Write
					</div>
					<br/>
					<br/>
					<input type = "text" name = "text_holder" placeholder = "Enter text to write into file"/>
					<br/>
					<br/>
					<input type = "submit" name = "Submit_Button" value = "Submit"/>
				</form>
			</fieldset>
		</center>		
	</body>
</html>

<?php

	if(isset($_POST["Submit_Button"]))
	{	
		$file = fopen($_POST["file_name_holder"], "a+");
		if($_POST["file_Opn"] == "read")
		{
			echo fread($file, filesize($_POST["file_name_holder"]));
		}
	
		else if($_POST["file_Opn"] == "write")
		{
			fwrite($file, $_POST["text_holder"]);
			echo "Data written successfully..!!";
		}
	
		else
		{
			echo "Please, Select any one File-Operation.";
		}
	
		fclose($file);
	}	
	
?>