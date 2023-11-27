<HTML>
<HEAD>
<TITLE>STUDENT INFO</TITLE>
<body>
<h1 align="center"> STUDENT INFO </h1>
<form id = "form1" onclick="return val()">
<table>
<tr>
	<th>admission number </th>
	<th>name </th>
	<th>mark1 </th>
	<th>mark2 </th>
	<th>mark3 </th>
	<th>mark4 </th>
</tr>
<tr>
	<th> <input type="number" id="n1"></input></th>
	<th> <input type="text" id="n2"></input></th>
	<th> <input type="number" id="n3"></input></th>
	<th> <input type="number" id="n4"></input></th>
	<th> <input type="number" id="n5"></input></th>
	<th> <input type="number" id="n6"></input></th>
</tr>
</table>
	<br><br><br>
	<h5 align="center"><input type="button" value="submit" onclick="val()"></h5>
</form>
<?php
if(isset($_POST["form1"])
{
	$ad=$_POST["n1"];
	$name=$_POST["n2"];
	$m1=$_POST["n3"];
	$m2=$_POST["n4"];
	$m3=$_POST["n5"];
	$m4=$_POST["n6"];
}
?>
<table>
<tr>
	<th>admission :</th>
	<th><?php echo $ad; ?></th>
</tr>
<tr>
	<th>name :</th>
	<th><?php echo $name; ?></th>
</tr>
<tr>
	<th>mark1 :</th>
	<th><?php echo $m1; ?></th>
</tr>
<tr>
	<th>mark2 :</th>
	<th><?php echo $m2; ?></th>
</tr>
<tr>
	<th>mark3 :</th>
	<th><?php echo $m3; ?></th>
</tr>
<tr>
	<th>mark 4 :</th>
	<th><?php echo $m4; ?></th>
</tr>
</table>

</body>
</head>
</html>

