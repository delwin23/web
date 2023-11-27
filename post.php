<html>
<body>
<form action="post.php" method="POST">
<input type="text" name="mace">
<input type="submit" name="d">
</body>
</html>
<?php

if(isset($_POST['d']))
{
$n=$_POST['mace'];
echo "value entered =", $n;
}
?>
