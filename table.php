//tablecreation
<?php
$con=new mysqli("localhost","root","");
if($con->connect_error){
die("connection_failed:".$con->connect_error);
}
$sl=CREATE TABLE student(id INT(2) PRIMARY KEY,
Name VARCHAR(35)NOT NULL
)";
if($con->query($sl)===TRUE){
echo "error creating table:".$con->error;
}$con->close();


