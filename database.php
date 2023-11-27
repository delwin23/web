<?php
$con=new mysqli("localhost","root","");
if($con->connect_error){
die("connection failed:".$con->connect_error);
}
$d="create database MCA";
if($con->query($d)===TRUE){
echo "\n database created";
}
else{
echo "\n failed to create database".$con->error;
}
$con->close();
?>
