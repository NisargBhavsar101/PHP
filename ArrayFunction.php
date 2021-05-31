<?php

echo"<h1> Types of ARRAY-FUNCTION</h1>";
echo"<h2> <br/> 1.array_count_values <br/></h2>";
$arr = array("C","php","c","android","php","java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) 
{ 
    echo "<br/>$key - <strong>$value</strong> ";
}
echo"<h2> <br/> 2.array_sum <br/></h2>";
$myarray = array(10,24,38,40,52); 
echo array_sum($myarray);
echo"<h2> <br/> 3.array_product <br/></h2>";
$myarray = array(18,2,33,24,65); 
echo array_product($myarray);
echo"<h2> <br/> 4.array_reverse <br/></h2>";
$arr = array('c', 'c++', 'java', 'android', 'php');
$revarr = array_reverse($arr);
print_r($revarr);	
echo"<h2> <br/> 5.in_array <br/></h2>";
$arr = array('Samsung', 'Oneplus', 'Apple', 'OPPO', 'MI');
$temp = in_array('php',$arr);
echo $temp; 
echo"<h2> <br/> 6.array_rand <br/></h2>";
$arr = array('Samsung', 'Oneplus', 'Apple', 'OPPO', 'MI'); 
$indexofarray = array_rand($arr);
echo"<h2> <br/> 7.Select multiple keys at random <br/></h2>";
$arr = array('Samsung', 'Oneplus', 'Apple', 'OPPO', 'MI'); 
$indexofarray = array_rand($arr,2);
foreach ($indexofarray as $key => $value) 
{ 
    echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
echo"<h2> <br/> 8.array_unique <br/></h2>";
$arr = array('Samsung', 'Oneplus', 'Apple', 'OPPO', 'MI'); 
print_r(array_unique($arr));

echo"<h2> <br/> 9. array_merge<br/></h2>";
$arr1 = array('Andy','Rocky','andrey','jay','Rohan');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2); print_r($NewArr);
echo"<h2> <br/> 10.array_search <br/></h2>";
$myarr = array('Andy','Rocky','andrey','jay','Rohan');
$check = array_search('jay', $myarr); 
echo $check; 
echo"<h2> <br/> 11.Range  <br/></h2>";
$year = range(1900,2020);
echo "<select>";
foreach ($year as $value) 
{ echo 
"<option>$value</option>";
}
echo "</select>";
echo"<h2> <br/> 12.sort <br/></h2>";
$arr = array(80,160,50,240,68,174); 
sort($arr); 
print_r($arr); 
echo"<h2> <br/> 13.rsort <br/></h2>";
$arr = array(80,60,50,40,8,74); 
rsort($arr); 
print_r($arr);
echo"<h2> <br/> 14.asort <br/></h2>";
$arr = array(20,40,40,21,18,2);
 asort($arr); 
print_r($arr);
echo"<h2> <br/> 15.Key Sort <br/></h2>";
$arr = array(
    "Volvo" => "Yellow", 
    "Toyota" => "Red", 
    "BMW" => "Green"); 
    ksort($arr);
    foreach ($arr as $key => $value){ 
        echo "<br />$key - $value ";
    }        
echo"<h2> <br/> 16.shuffle  <br/></h2>";
$myArray = array("Football", "Baseball", "Hockey", "Tennis", "Boxing");
shuffle($myArray);          
foreach ($myArray as $key => $value) {	
	echo "<br /> $value ";	
}
echo"<h2> <br/> 17.array_key_exists<br/></h2>";
$arr = array("a" => "apple", "b" => "banana"); 
echo array_key_exists('a',$arr);
echo"<h2> <br/> 18.array_change_key_case <br/></h2>";
$arr = array(
    "Banana" => "Yellow", 
    "Apple" => "Red", 
    "Mango" => "Green");
    $uppercase = array_change_key_case($arr,CASE_UPPER);
     print_r($uppercase);
echo"<h2> <br/> 19.array_combine <br/></h2>";
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
print_r($NewVar); 
$NewVar = array_combine($arr1, $arr2);
echo"<h2> <br/> 20.End <br/></h2>";
$myarr = array('c', 'c++','android', 'java', 'php'); 
echo end($myarr);
echo"<h2> <br/> 21.compact <br/></h2>";
$name = "nisarg";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);
echo"<h2> <br/> 22.array_flip <br/></h2>";
$arr = array("h" => "Harry", "b" => "BAt", "c" => "car");
$fliparray = array_flip($arr); 
print_r($fliparray);
echo"<h2> <br/> 23.array_diff <br/></h2>";
$a=array("nisarh","c","MI","java","php","android");
$b=array("nisarg","car","java","php"); 
$diff = array_diff($a, $b);
 print_r($diff);
echo"<h2> <br/> 24.array_intersect <br/></h2>";
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
echo"<h2> <br/> 25.array_values  <br/></h2>";
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr); foreach($myarr as $key => $value) {
    echo " <br />$key - $value";
}
echo"<h2> <br/> 26.array_push <br/></h2>";
$a=array("c","c++");
array_push($a,"java","php"); 
print_r($a);
echo"<h2> <br/> 27.array_pop <br/></h2>";
$a = array("c", "c++", "Java", "PHP", "ASP"); 
array_pop($a); 
echo"<h2> <br/> 28.explode <br/></h2>";
$arr =  explode("",$mystring); 
print_r($arr);
$mystring = "I Love INDIA";
echo"<h2> <br/> 29.implode <br/></h2>";
$arr = array("i","love","India");
$mystring = implode(" ", $arr); 
echo $mystring;

?>