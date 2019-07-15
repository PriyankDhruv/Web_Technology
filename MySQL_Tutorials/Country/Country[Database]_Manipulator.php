<html> 
	<head>
		<title>Country_Data_Manipulator</title>
	</head> 
	<body> 
		<fieldset style = "width:15%">
			<legend>Country Data Entry</legend>
				<form name = "country" method = "post" action = "Country[Database]_Manipulator.php"> 
					<br/>
					<input type="text" name = "city_name" placeholder = "City Name"/>
					<br/>
					<br/>
					<input type = "text" name = "area" placeholder = "Area"/>
					<br/>
					<br/>
					<input type = "number" name = "population" placeholder = "Population"/>
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
		$city_name = $_POST['city_name']; 
		$area = $_POST['area']; 
		$population = $_POST['population']; 
  
		$server = "localhost"; 
		$db_uname  = "root"; 
		$db_pwd = ""; 
		$db_name = "country"; 	
		
		$link = mysqli_connect($server, $db_uname, $db_pwd) or die("Niti"); 
		mysqli_select_db($link, $db_name); 
		
		$query_1 = "insert into country values('".$city_name."','".$area."','".$population."')"; 
		$result_1 = mysqli_query($link, $query_1); 

		$query_2 = "select * from country"; 
		$result_2 = mysqli_query($link, $query_2); 
		
		$count = mysqli_num_rows($result_2);
		if($count > 0)
		{
			echo "<br/>"."<br/>";
			echo "<table border='1'>";
			
				echo "<tr>";
					echo "<td><b>City Name<b/></td>";
					echo "<td><b>Area<b/></td>";
					echo "<td><b>Population<b/></td>";
				echo "</tr>"; 
 
				while($row = mysqli_fetch_array($result_2))
				{ 
					echo "<tr>"; 
						echo "<td>".$row['city_name']."</td>"; 
						echo "<td>".$row['area']."</td>"; 
						echo "<td>".$row['population']."</td>"; 
					echo "</tr>"; 
				}
			
			echo "</table>"; 
		} 
  
		else
		{ 
			echo "Data Not Found..!!"; 
		} 
		
		echo "<br/>"."<br/>";
		echo "Want to Insert More Data ?";
		echo "<br/>"."<br/>";
		echo "If Yes, then ";
		echo "<a href = 'Country[Database]_Manipulator.php'>Insert</a>"; 
		
		echo "<br/>"."<br/>";
		echo "Want to Delete Current Data ?";
		echo "<br/>"."<br/>";
		echo "If Yes, then ";
		echo "<a href = 'Delete[Country_Data].php'>Delete</a>"; 
		
	}
	
?> 
	