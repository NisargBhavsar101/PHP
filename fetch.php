<?php
$conn = mysqli_connect("localhost", "root", "", "summer_internship");
$que = mysqli_query($conn,"select * from tbl_stu")  or die("Error : " . mysqli_error($conn));
$row = mysqli_fetch_row($que);
print_r($row);
echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9].$row[10];
$row = mysqli_fetch_array($que);
echo"<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9].$row[10];
echo $row['st_name'].$row['st_gender'].$row['st_dob'].$row['st_email'].$row['st_mobile_no'].$row['st_collegename'].$row['st_subject'].$row['st_shift'].$row['st_city'].$row['st_area'].$row['st_pincode'];
?>