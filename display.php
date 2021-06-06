<?php
$id = filter_input(INPUT_POST, "id");
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
        "insert into tbl_stu( st_id,st_name,st_gender,st_dob,st_email,st_mobile_no,st_collegename,st_subject,st_shift,st_city,st_area,st_pincode) 
        values ( 'id','$name' , '$gen' ,'$dob','$email' ,  '$m_no' , '$c_name' ,   '$sub' , '$type' ,'$city' ,'$Area', '$pin' )")
        or die("Error : " . mysqli_error($conn));

?>

<?php

$conn = mysqli_connect("localhost", "root", "", "summer_internship");
$que = mysqli_query($conn,"select * from tbl_stu where is_delete =0 ")  or die("Error : " . mysqli_error($conn));
echo"<table border='2'>";
echo"<tr>";
echo"<th>sr_no</th>";
echo"<th>Name</th>";
echo"<th>Gender</th>";
echo"<th>DOB</th>";
echo"<th>E-mail</th>";
echo"<th>Mobile-No</th>";
echo"<th>CollegeName</th>";
echo"<th>Subject</th>";
echo"<th>Mode</th>";
echo"<th>City</th>";
echo"<th>Area</th>";
echo"<th>Pincode</th>";
echo"<th>Action</th>";
echo"</tr>";
$i=0;
while($row = mysqli_fetch_array($que)){
    echo"<tr>";
    $i++;
    echo"<td> $i </td>";
    echo"<td>{$row['st_name']}</td>";
    echo"<td>{$row['st_gender']}</td>";
    echo"<td>{$row['st_dob']}</td>";
    echo"<td>{$row['st_email']}</td>";
    echo"<td>{$row['st_mobile_no']}</td>";
    echo"<td>{$row['st_collegename']}</td>";
    echo"<td>{$row['st_subject']}</td>";
    echo"<td>{$row['st_shift']}</td>";
    echo"<td>{$row['st_city']}</td>";
    echo"<td>{$row['st_area']}</td>";
    echo"<td>{$row['st_pincode']}</td>";
    echo"<td> <a href='delete.php?deleteid={$row['st_id']}'> DELETE</a>|<a href='update.php?id={$row['st_id']}'> Edit</a></td>";
echo"</tr>";
}
echo"</table>";
echo"<a href = 'student_form.php'>Add record</a>";