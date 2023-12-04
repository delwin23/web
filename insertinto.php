<html>
<head>
</head>
<body>
<h2 style="text-align:center; font-family: 'Arial', sans-serif; color: #4CAF50; text-transform: uppercase; letter-spacing: 2px;">Insertion and Deletion</h2>
<center>
<form action="" method=post>
<table style="text-align:center;">
<tr><td>
<label for="">Id:</label>
</td>
<td>
<input type="text"   pattern="[0-9]" name="id" required placeholder="enter the id"><br>
</td>
</tr>
<tr>
<td>
<label for="">Name:</label><br>
</td>
<td>
<input type="text" name="name" required placeholder="enter the name" ><br>
<tr>
<td colspan=2>
<input type="submit"  name="insert" value="insert">
<input type="submit" name="delete" value="delete">
<input type="submit" name="update" value="update">
</td>
</tr>
<style>
 body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    table {
      border-collapse: collapse;
      width: 80%;
      margin: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      border-radius: 10px;
      background: linear-gradient(45deg, #92c3d2, #ecb6e8);
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #e0e0e0;
      color: #333;
    }

    th {
      background-color: #007bff;
      color: #fff;
      font-weight: bold;
    }

    tr:hover {
      background-color: rgba(255, 255, 255, 0.7);
    }
</style>




</form>


<?php
	$con=new mysqli("localhost","root","","MCA");
	if ($con->connect_error)
	{
		die("connection_failed".$con->connect_error);
	}
	
	//code for deletion of data from the table
	
	if(isset($_POST['delete']))
	{
		$name=$_POST['name'];
		$id=$_POST['id'];
		
	$del="DELETE FROM student WHERE id='$id'";
	if($con->query($del)==TRUE)
	{
		echo "data is deleted";
		}
	else
	{
		echo "deletion failed".$con->error;;
		}
		}
	

	if(isset($_POST['insert'])){
		$name=$_POST['name'];
		$id=$_POST['id'];


		$ins="INSERT INTO student(`id`,`Name`)VALUES('$id','$name')";
	if($con->query($ins)==TRUE)
	{
		echo "data is inserted";
	}
	else{
		echo "insertion failed!".$con->error;
	}
	}
	
	//code for updating the table
	if(isset($_POST['update']))
	{
	$name=$_POST['name'];
	$id=$_POST['id'];
	
	$upd="UPDATE student SET name='$name' where id='$id'";
	if($con->query($upd)==TRUE)
	{
	echo "data is updated";
	}
	else
	{
	echo "data is not updated";
	}
	}
	
	
//code  for displaying the table
$con = new mysqli("localhost", "root", "", "MCA");

  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }

  // Fetch data from the database
  $result = $con->query("SELECT * FROM student");

  // Display the table
  echo "<table style='text-align:center;'>";
  echo "<tr><th>ID</th><th>Name</th></tr>";

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
  $con->close();
?>
	

