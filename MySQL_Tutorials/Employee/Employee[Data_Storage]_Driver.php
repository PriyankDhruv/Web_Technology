<html> 
	<head>
		<title>Employee_Data_Fetcher</title>
	</head> 
	<body> 
		<fieldset style = "width:15%">
			<legend>Employee Data Entry</legend>
				<form name = "emp" method = "post" action = "Employee[Data_Storage]_Driver.php"> 
					<br/>
					<input type = "number" name = "emp_id" placeholder = "Employee Id"/>
					<br/>
					<br/>
					<input type = "text" name = "job_title" placeholder = "Job Title"/>
					<br/>
					<br/>
					<input type = "number" name = "year" placeholder = "Year Of Experience"/>
					<br/>
					<br/>
					<input type = "submit" name = "Submit" value = "Submit"> 
					<br/>
				</form> 
		</fieldset>
	</body>
</html> 

<?php 

	if(isset($_POST['Submit']))
	{ 
		$emp_id = $_POST['emp_id']; 
		$job_title = $_POST['job_title']; 
		$year = $_POST['year']; 
 
		$server = "localhost"; 
		$db_uname  = "root"; 
		$db_pwd = ""; 
		$db_name = "emp"; 
  
		$link = mysqli_connect($server, $db_uname, $db_pwd) or die("Niti"); 
		mysqli_select_db($link, $db_name); 
		
		$query_1 = "insert into emp values('".$emp_id."', '".$job_title."', '".$year."')"; 
		$result_1 = mysqli_query($link, $query_1);
		
		$query_2 = "select * from emp order by year asc"; 
		$result_2 = mysqli_query($link,$query_2);
		
		$count = mysqli_num_rows($result_2);  
		if($count > 0)
		{ 
			echo "<br/>"."<br/>";
			echo "<table border='1' cellpadding='5'>"; 
			
				echo "<tr>";
					echo "<td><b>emp_ID</b></td>";
					echo "<td><b>Job_Title</b></td>";
					echo "<td><b>Year_Of_Expr</b></td>";
				echo "</tr>";
				
				while($row = mysqli_fetch_array($result_2))
				{ 
					echo "<tr>"; 
						echo "<td>".$row['emp_id']."</td>"; 
						echo "<td>".$row['job_title']."</td>"; 
						echo "<td>".$row['year']."</td>"; 
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
		echo "<a href = 'Employee[Data_Storage]_Driver.php'>Click here</a><br>"; 
  
	}

?>	
 