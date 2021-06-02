<?php

$name = filter_input(INPUT_POST, "name");
$email = filter_input(INPUT_POST, "email");
$m_no = filter_input(INPUT_POST, "m_no");
$c_name = filter_input(INPUT_POST, "c_name");
$dob = filter_input(INPUT_POST, "dob");
$gen = filter_input(INPUT_POST, "gen");
$sub = filter_input(INPUT_POST, "sub");
$type = filter_input(INPUT_POST, "type");
$city = filter_input(INPUT_POST, "city");
$Area = filter_input(INPUT_POST, "Area");
$pin = filter_input(INPUT_POST, "pin");


$conn = mysqli_connect("localhost", "root", "", "summer_internship");

$que = mysqli_query($conn,
        "insert into tbl_stu(st_name,st_gender,st_dob,st_email,st_mobile_no,st_collegename,st_subject,st_shift,st_city,st_area,st_pincode) values ( '$name' , '$gen' ,'$dob','$email' ,  '$m_no' , '$c_name' ,   '$sub' , '$type' ,'$city' ,'$Area', '$pin' )")
        or die("Error : " . mysqli_error($conn));

if($que){
    echo "<script>alert('Congratulation! Registration Details submitted Successfully.')</script>";
}