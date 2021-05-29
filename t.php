<?php
$a =  $_POST['txty1'];
$b =  $_POST['txty2'];
$c =  $_POST['txty3'];
$d =  $_POST['txty4'];
$e =  $_POST['txyt5'];
$f =  $_POST['txty6'];
$fn =  $_POST['ni'];
$g =  $_POST['txt7'];
$h =  $_POST['txt8'];
$i =  $_POST['txt9'];
$j=  $_POST['txt10'];
$k =  $_POST['txt11'];
$sum=   $g+$h+$i+$j+$k;
$m=($sum/500)*100;
echo"<h1 style= margin-left:40%;> Student DETAIL IS </h1>";
echo"<table style= margin-left:41%; border='5'>";
echo"<tr>";
echo"<td>";
echo " <br/>FIRST-NAME:  $a <br/>";
echo "<br/>MIDDLE-NAME:  $b <br/>";
echo "<br/>LAST-NAME:    $c <br/>";
echo "<br/>Contact-Numbe: $d <br/>";
echo "<br/>E-MAIL:       $e <br/>";
echo "<br> STD:          $f <br/>";
echo"</td>";
echo"</tr>";
echo"</table>";
echo"<td><h1 style= margin-left:40%;>Marks obtain by <br/> </h1></td>";
echo  " <table style= margin-left:39%; border='5'>";
echo"<tr>";
echo " <td >NAME: $a $b  $c </td> <td> Roll no: $fn </td> <td> <br/></td>";
echo"</tr>";
echo"<tr>";
echo"<td> Subjects</td> <td> Marks </td> <td> Total</td>";
echo"</tr>";
echo"<tr>";
echo "<td> <br/> ENGLISH</td><td> $g  </td> <td> 100<br/></td>";
echo"</tr>";
echo"<tr>";
echo "<td> <br/> MATHS</td><td> $h </td> <td> 100<br/></td>";
echo"</tr>";
echo"<tr>";
echo "<td> <br/> SCIENCE </td><td> $i </td> <td> 100 <br/></td>";
echo"</tr>";
echo"<tr>";
echo "<td> <br/> COMPUTER </td><td> $j </td> <td> 100 <br/></td>";
echo"</tr>";
echo"<tr>";
echo "<td> <br/> S.S. </td><td> $k </td> <td> 100 <br/></td>";
echo"</tr>";
echo"<tr>";
echo "<td> <br/> Total </td><td > $sum </td> <td> 500 <br/></td>";
echo"</tr>";
echo"<tr>";
echo "<td> <br/> Percentage </td><td> $m% <br/></td>";
echo"<td>";
if($m>=33){
    echo"pass";
}else{
    echo"fail";
}
echo"</tr>";

echo"</td>";

echo"</table>";
echo"<table style= margin-left:49% ;>";
echo"<tr>";
echo"<td>";
if ($m<33){    
    echo "<h1 style=background-color:RED;>FAIL</h1>";
}    
else if ($m>=34 && $m<50) {    
    echo "<h1 style= background-color:YELLOW;>D grade</h1>";   
}    
else if ($m>=50 && $m<65) {    
   echo "<h1 style= background-color:ORANGE;>C grade</h1>";   
    
}    
else if ($m>=65 && $m<80) {    
    echo "<h1 style= background-color:BLUE;>B grade</h1>";   
     
}    
else if ($m>=80 && $m<90) {    
    echo "<h1 style= background-color:GREEN;>A grade</h1>"; 
}  
else if ($m>=90 && $m<100) {    
    echo "<h1 style= background-color:GREEN;>A+ grade</h1>"; 
}  
else {    
    echo "Invalid input";    
}
echo"</td>";
echo"</tr>";

echo"</table>";     
    
?>
