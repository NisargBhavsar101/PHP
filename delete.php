<?php
$conn = mysqli_connect("localhost", "root", "", "summer_internship");
$d = $_GET['deleteid'];
//echo "$d";
$que = mysqli_query($conn,"update tbl_stu  set is_delete= 1  where st_id='{$d}' ")  or die("Error : " . mysqli_error($conn));

if($que){
    echo "<script> alert('Record Deleted' ); window.location='display.php';</script>";
}
?>
