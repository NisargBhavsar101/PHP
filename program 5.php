<?php  
echo "<h1> All MIXED</h1>";
$num=12;  
if($num<100){  
echo "$num is less than 100";  
}  
echo "<br/>";
$num=12;  
if($num%2==0){  
echo "$num is even number";  
}else{  
echo "$num is odd number";  
}  
echo "<br/>";
$D = "BCA";  
switch ($D)  
{     
    case "BCA":   
        echo "BCA is 3 years course";  
        break;  
    case "Bsc":   
        echo "Bsc is 3 years course";  
        break;  
    case "B.Tech":   
        echo "B.Tech is 4 years course";  
        break;  
    case "B.Arch":   
        echo "B.Arch is 5 years course";  
        break;  
    default:   
        echo "Wrong Choice";  
        break;  
}  
?>  