<?php

echo "1.Arithmetic Operators:";
echo "<br><br>";
$a = 20;
$b = 5;

echo "For a+b, the result is ".($a+$b)."<br>";
echo "For a-b, the result is ".($a-$b)."<br>";
echo "For a*b, the result is ".($a*$b)."<br>";
echo "For a/b, the result is ".($a/$b)."<br>";
echo "For a%b, the result is ".($a%$b)."<br>";
echo "For a**b, the result is ".($a**$b)."<br>";
echo "<br>";

echo "2.Assignment Operators:";
echo "<br><br>";
$a +=6;
echo "For a+=6, the value is ".$a."<br>";
$a -=6;
echo "For a, the value is ".$a."<br>";
$a *=6;
echo "For a, the value is ".$a."<br>";
$a /=6;
echo "For a, the value is ".$a."<br>";
$a %=6;
echo "For a, the value is ".$a."<br>";
$a **=6;
echo "For a, the value is ".$a."<br>";
echo "<br>";

echo "3.Comparison Operators:";
echo "<br><br>";
$x=7;
$y=7;
$z=8;

echo "For x==y, the result is ";
echo var_dump($x == $y);
echo "<br>";

echo "For x>y, the result is ";
echo var_dump($x > $y);
echo "<br>";

echo "For x>=y, the result is ";
echo var_dump($x >= $y);
echo "<br>";

echo var_dump($x < $z);
echo "<br>";

echo "For x<=y, the result is ";
echo var_dump($x <= $y);
echo "<br>";

echo "For x<>y, the result is ";
echo var_dump($x <> $y);
echo "<br><br>";

echo "4.Logical Operators:";
echo "<br><br>";

$m= true;
$n= false;
$o= true;
echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m && o, the result is ";
echo var_dump($m && $o);
echo "<br>";

echo "For m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m, the result is ";
echo var_dump(!$m);
echo "<br>";
?>