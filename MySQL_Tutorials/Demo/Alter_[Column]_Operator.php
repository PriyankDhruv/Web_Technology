<html> 
	<head>
		<title>Alter_Data_Operator</title>
	</head> 
    <body> 
		<fieldset style = "width:15%">
			<legend>Enter New-Column Details</legend>
				<form name = "alter" method = "post" action = "Alter_[Column]_Operator.php"> 
					<br/>
					<input type = "text" name = "column_name" placeholder = "Column Name"/>
					<br/>
					<br/>
					<input type = "text" name = "type" placeholder = "Type"/>
					<br/>
					<br/>
					<input type = "number" name = "size" placeholder = "Size"/>
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
        $column_name = $_POST['column_name']; 
        $type = $_POST['type']; 
        $size = $_POST['size'];

		$server = "localhost";
		$db_uname = "root"; 
        $db_pwd = ""; 
        $db_name = "login"; 
 
        $link = mysqli_connect($server, $db_uname, $db_pwd) or die("Piyu"); 
        mysqli_select_db($link, $db_name);
		
        $query = "alter table login add ".$column_name." ".$type."(".$size.")"; 
        $result = mysqli_query($link, $query);
		
		echo "<br/>";
		echo "Data Altered SuccessFully..!!";
		echo "<br/>"."<br/>";
		
		echo "<br/>";
		echo "Want to Insert Data in the Newly Added Column ? ";
		echo "<br/>"."<br/>";
		echo "If Yes, then ";
        echo "<a href = 'Add_Info[New_Column].php'>Click here</a>"; 
         
	}
	
?> 