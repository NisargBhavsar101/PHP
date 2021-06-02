<?php
$connection= mysqli_connect("localhost","root","","db_internship");
if($_POST)
{
    $NAME = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobileNumber = $_POST['txt3'];

    $q =mysqli_query( $connection,"insert into tbl_user(user_name ,user_gender,user_mob) value('{$NAME}','{$gender}','{$mobileNumber}')" ) 
    or die("Error".mysqli_error($connection));
    
    if($q)
    {
        echo"<script> alert('Record Added');</script>";
    }
    
}

?>

<html>
<body>
<form method="POST" >
 NAME : 
 <input type="text" name="txt1" required /> 
 gender:<select name="txt2"> 
<option>Male</option>
<option>female</option>
</select>
  mobileNumber : 
 <input type="tel" name="txt3" maxlength="10" required /> 
<input type="submit"/>
</form>
</body>
</html>