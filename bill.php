<html>
	<body>
	   <style>
			table{
			              border:1px solid black;
			              width:500px;
			              }
			              tr:nth-child(even){
			              background-color:lightblue;
			              }
			              th,td{
			              padding:10px;
			                border:1px solid black;
			                text-align:center;
			              }
			              body{
			               font-family:sans-serif;
			              }
			              a{
			              color:hotpink;
			            /*  padding:10px;
			              display:inline-block;*/
			              }
			              a:hover {
			              color:green;
			              }
		</style>
		<center>
		<table border="">
			<form method ="post" action="">
					<tr>
						<th>SI.NO</th>
						<th>ITEM</th>
						<th>QUANTITY</th>
					</tr>
					<tr>
						<th>1</th>
						<td>
					           Pen
						</td>
						<td><input type="number" name="qua1" value=0></td>
				     </tr>
					<tr>
						<th>2</th>
						<td>
							Pencil
						</td>
						<td><input type="number" name="qua2" value=0></td>
				     </tr>
					<tr>
						<th>3</th>
						<td>
							 Scale
						</td>
						<td><input type="number" name="qua3" value=0></td>
				     </tr>
				     <tr>
				     	<td colspan="3"><center><input type="submit" name="sub" value="generate bill"></center></td>
				     </tr>
			</form>
		</table>
		</center>	
<?php
if(isset($_POST["sub"]))
{
	$a1=5;
	$a2=5;
	$a3=5;
	$qua1=$_POST["qua1"];
	$qua2=$_POST["qua2"];
	$qua3=$_POST["qua3"];
	$total1=$a1*$qua1;
	$total2=$a2*$qua2;
	$total3=$a3*$qua3;
	$total=$total1+$total2+$total3;
?>
<html>
	<body>
	<CENTER>
	<h2><u>LULU HYPERMARKETS</u></h2>
	<h3 align="right">31-10-2023</h3>
	<h2><u>PURCHASE BILL</u></h2>
		<table border="">
					<tr>
						<th>SI.NO</th>
						<th>ITEM</th>
						<th>QUANTITY</th>
						<th>PRICE</th>
						<th>TOTAL</th>
					</tr>
					<tr>
						<th>1</th>
						<td>Pen</td>                    
						<td> <?php echo $qua1;?></td>
						<td><?php echo $a1;?></td>
						<td><?php echo $total1;?></td>
				     </tr>
				<tr>
						<th>2</th>
						<td>Pencil</td>
						<td><?php echo $qua2;?></td>
						<td><?php echo $a2;?></td>
						<td><?php echo $total2;?></td>
				     </tr>
				     <tr>
						<th>3</th>
						<td>Scale</td>
						<td> <?php echo $qua3;?></td>
						<td><?php echo $a3;?></td>
						<td><?php echo $total3;?></td>
				     </tr>
				     <tr>
				     	<td colspan="5"><center>GRAND TOTAL:<?php echo $total; ?></center></td>
				     </tr>
			</form>
		</table>
<?php
}
?>
</CENTER>
</body>
</html>
	</body>
</html>
<?php
if(isset($_POST["sub"]))
{
	$c1=60000;
	$c2=5000;
	$c3=2000;
	$q1=$_POST["q1"];
	$q2=$_POST["q2"];
	$q3=$_POST["q3"];
	$t1=$c1*$q1;
	$t2=$c2*$q2;
	$t3=$c3*$q3;
	$t=$t1+$t2+$t3;
?>
<html>
	<body>
	<CENTER>
	<h2><u>ABC SUPERMARKET</u></h2>
	<h3 align="right">31-10-2023</h3>
	<h2><u>BILL</u></h2>
		<table border="">
					<tr>
						<th>S.NO</th>
						<th>ITEM</th>
						<th>QUANTITY</th>
						<th>UNIT PRICE</th>
						<th>TOTAL</th>
					</tr>
					<tr>
						<th>1</th>
						<td>MONITOR</td>                    
						<td> <?php echo $q1;?></td>
						<td><?php echo $c1;?></td>
						<td><?php echo $t1;?></td>
				     </tr>
				<tr>
						<th>2</th>
						<td>KEYBOARD</td>
						<td><?php echo $q2;?></td>
						<td><?php echo $c2;?></td>
						<td><?php echo $t2;?></td>
				     </tr>
				     <tr>
						<th>3</th>
						<td>MOUSE</td>
						<td> <?php echo $q3;?></td>
						<td><?php echo $c3;?></td>
						<td><?php echo $t3;?></td>
				     </tr>
				     <tr>
				     	<td colspan="5"><center>GRAND TOTAL:<?php echo $t; ?></center></td>
				     </tr>
			</form>
		</table>
<?php
}
?>
</CENTER>
</body>
</html>
