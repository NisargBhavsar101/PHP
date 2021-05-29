<?php
echo"<h1>LOOPS:<br/></h1>";
echo"<h1>1 for Loop:<br/></h1>";
echo"<table border='5'>";
for($i=0;$i<10;$i++){
echo"<tr>";
if($i%2==0){
    echo"<td bgcolor='orange'>$i</td>";
}else{
    echo"<td bgcolor='red'>$i</td>";
}
echo " </tr>";
}
echo " </table>";
echo"<h1><br/>2 while Loop:<br/></h1>";
$i=1;
while($i<20){
    echo"$i";
    $i++;
}
echo"<h1><br/>3 DO..while Loop:<br/></h1>";
$j=0;
DO{
echo"$j";
$j++;
}while($j<30)
?>