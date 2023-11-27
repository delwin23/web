<?php
function cube($n)
{
return $n*$n*$n;
}
$ar=cube(3);
echo "area of the cube is:",$ar;

function rect($l,$b)
{
$area=$l*$b;
echo"<br>the area of rectangle is:",$area;
}

rect(3,4);


function triangle()
{
$b=2;
$h=4;
echo"<br> area of triangle is:",0.5*$b*$h;
}
triangle();

function sub()
{
$a=4;
$b=6;
$x=$b-$a;
return $x;
}
$x=sub();
echo "<br>the value subtracted is:",$x;



function add($a,$b)
{
$c=$a+$b;
return $c;

}

$c=add(4,6);
echo"<br>the sum is:",$c;




function square(&$b)
{
$b=$b*$b;
}
$v=3;
square($v);
echo"<br>area of square is:",$v;





function display()
{
echo "<br>MACE";
}
display();
?> 
