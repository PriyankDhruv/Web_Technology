<html>
	<head>
		<title>Add_Info_Operator</title>
	</head>
    <body>
		<fieldset style = "width:15%">
			<legend>Enter New-Column Data</legend>
				<form name = "add_Data" method = "post" action = "Add_Info[New_Column].php">
					<br/>
					<input type = "text" name = "column_data" placeholder = "Data"/>
					<br/>
					<br/>
					<input type = "submit" name = "Submit" value = "Submit"/>
					<br/>
				</form>
		</fieldset>
	</body>
</html>

<?php
	
	if(isset($_POST['Submit']))
	{
		$column_data = $_POST['column_data'];

		$server = "localhost";
		$db_uname  = "root";
		$db_pwd = "";
		$db_name = "login";

		$link = mysqli_connect($server, $db_uname, $db_pwd) or die("Piyu");
		mysqli_select_db($link, $db_name);
		
		$query = "update login set EnrollNo = '".$_POST['column_data']."' where username = 'priyank25dhruv@gmail.com'";
		$result = mysqli_query($link, $query);

		echo "<br/>";
		echo "Data Inserted into Newly Added Column SuccessFully..!!";

	}

?>