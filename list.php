<!DOCTYPE html>
<html>
<head>
	<title>List Users page</title>
</head>
<body>
<form>
<center><h1>List Users</h1></center>
</form>
</body>
</html>
<?php
  ini_set("display_errors", 1);
  $servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "naf";
		$conn = mysqli_connect($servername, $username,$password,$dbname);
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}


	if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		$Fisrtname = $_POST['fname'];
		$Lastname = $_POST['lname'];
		$Email = $_POST['email'];
		$Gender = $_POST['gender'];
		$Education = $_POST['education'];
		$Skills = $_POST['skills'];
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO userdetails (Fisrtname, Lastname, Email, Gender, Education, Skills)
		VALUES ('$Fisrtname', '$Lastname', '$Email', '$Gender', '$Education', '$Skills')";
		$conn->query($sql);

		$sql1 = "select Fisrtname, Lastname, Email, Gender, Education, Skills from userdetails";
		$tabledata = $conn->query($sql1);
		if (!$tabledata) {
		    echo "Sorry, the website is experiencing problems.";
		    exit;
		}
		echo "<center><table border=1>
		        <tr>
		        <th>Firstname</th>
			    <th>Lastname</th>
			    <th>Email</th>
			    <th>Gender</th>
			    <th>Education</th>
			    <th>Skills</th>
		        </tr>";
		while($row = $tabledata->fetch_assoc()) {
		
			echo "<tr>"
				."<td>"
				.$row['Fisrtname']
				."</td>"
				."<td>"
				.$row['Lastname']
				."</td>"
				."<td>"
				.$row['Email']
				."</td>"
				."<td>"
				.$row['Gender']
				."</td>"
				."<td>"
				.$row['Education']
				."</td>"
				."<td>"
				.$row['Skills']
				."</td></tr>";
		}
		echo "</center></table>";
		$conn->close();	
	}
?>