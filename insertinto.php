<html>
<head>
</head>
<body>
<center>
<form action="" method=post>
<table style="text-align:center;">
<tr><td>
<label for="">Id:</label>
</td>
<td>
<input type="text" name="id" required><br>
</td>
</tr>
<tr>
<td>
<label for="">Name:</label><br>
</td>
<td>
<input type="text" name="name" required ><br>
<tr>
<td colspan=2>
<input type="submit"  name="submit" value="save">
</td>
</tr>
</form>









<?php
$con=new mysqli("localhost","root","","MCA");
if ($con->connect_error)
{
die("connection_failed".$con->connect_error);
}

	if(isset($_POST['submit'])){
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
	$con->close();
	?>
	

