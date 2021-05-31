<?php
echo"<h1> Types of ARRAY</h1>";
echo"<h3 style=text-align:center> <br/> 1. Nmerical ARRAY-Method 1<br/></h3>";
$a[0]=  10;
$a[1]=  "B";
$a[2]=  "Hello";
$a[3]=  10.30;
for($i=0;$i<count($a);$i++)
echo "<h2 style=text-align:center><br/>$a[$i] </h2>";
echo"<h3 style=text-align:center> <br/> 2. Index ARRAY-Method 2<br/></h3>";
$b[]=  20;
$b[]=  "A";
$b[]=  "Welcome";
$b[]=  12.30;
for($i=0;$i<count($b);$i++)
echo "<h2 style=text-align:center><br/>$b[$i] </h2>";

echo"<h3 style=text-align:center> <br/> 3.Method 3<br/></h3>";
$c[] = array("Volvo", "BMW", "Toyota");
echo "$c[2]";
echo "<h1> debug of aaray </h1>";
echo "<h3><br/> Method-1 <br/></h3>";
echo "<pre>";
print_r($c);
echo "<pre>";
echo "<h3><br/> Method-2 <br/></h3>";
echo "<pre>";
var_dump($c);
echo "<pre>";
?>
