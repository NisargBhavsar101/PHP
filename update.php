<?php
$conn = mysqli_connect("localhost", "root", "", "summer_internship"); 
if(!isset($_GET['id']) || empty($_GET['id'])){
header("location:display.php"); 
}
    $editid = $_GET['id'];

$editq=mysqli_query($conn," select* from tbl_stu where st_id='{$editid}'")  or die("Error : " . mysqli_error($conn));
$editdata = mysqli_fetch_array($editq);
if($_POST){
$ido =$_POST['id'];
$namee =$_POST['name'];
$gend =$_POST['gen'];
$dobb =$_POST['dob'];
$emaill =$_POST['email'];
$m_noo =$_POST['m_no'];
$c_namee =$_POST['c_name'];
$subb =$_POST['sub'];
$typee =$_POST['type'];
$cityy =$_POST['city'];
$Areaa =$_POST['Area'];
$pinn =$_POST['pin'];
$uq=mysqli_query($conn,"update tbl_stu set st_id='{$ido}',st_name='{$namee}',st_gender='{$gend }',st_dob='{$dobb }',st_email='{ $emaill}',st_mobile_no='{$m_noo }',st_collegename='{$c_namee }',st_subject='{ $subb}',st_shift='{$typee }',st_city='{$cityy }',st_area='{$Areaa }',st_pincode'{$pinn}' where st_id='{$editid}' ") or die("Error : " . mysqli_error($conn));
if($uq){
echo"<script>alert('Record updated'); window.location='display.php'; </script> ";
}

}


?>
 <html>
 <body>
 <form  method="post" onsubmit="return submitForm(this);" >
                
                <label for="name">Name<font color=red>*</font></label>
                <input id="name" name="name" type="text" value="<?php  echo $editdata['st_name'];    ?>" placeholder="Enter the Name" required="required" />
                <br>
                <label for="gen">Gender<font color=red>*</font></label><br>
                <select id="gen" name="gen">
                    <option <?php if($editdata['st_gender']=="Male")  echo" selected"; ?> value="Male" selected="selected">Male</option>
                    <option <?php if($editdata['st_gender']=="Female")  echo" selected"; ?> value="Female">Female</option>
                </select>
                <br>
                <br>
                <label for="dob">Date of Birth<font color=red>*</font></label>
                <br /><input id="dob" name="dob" type="date" placeholder="Enter the Date of Birth" value="<?php  echo $editdata['st_dob'];    ?>" required="required" /><br />
                <br>
                <label for="email">Email<font color=red>*</font></label>
                <input id="email" name="email" type="email" placeholder="Enter the E-Mail"  value="<?php  echo $editdata['st_email'];?>" required="required" />
                <br>
                <br>
                <label for="m_no">Mobile No.<font color=red>*</font></label>
                <input id="m_no" name="m_no" type="number" minlength="10" maxlength="10" placeholder="Enter the Mobile No." value="<?php  echo $editdata['st_mobile_no'];?>" required="required" />
                <br>
                <br>
                <label for="c_name">College Name<font color=red>*</font></label>
                <input id="c_name" name="c_name" type="text" placeholder="Enter the College Name" value="<?php  echo $editdata['st_collegename'];    ?>"required="required" />
                <br>
                <br>
                 <label for="sub">Subject<font color=red>*</font></label><br />
                <select id="sub" name="sub">
                    <option <?php if($editdata['st_subject']=="PHP")  echo"selected"; ?>value="PHP" selected="selected">PHP</option>
                    <option <?php if($editdata['st_subject']=="Python with dJango")  echo"selected"; ?>value="Python with dJango">Python with dJango</option>
                    <option <?php if($editdata['st_subject']=="Node js")  echo"selected"; ?> value="Node js">Node JS</option>
                    <option <?php if($editdata['st_subject']=="Java")  echo"selected"; ?>     value="Java">Java</option>
                </select>
                <br />
                <label for="off_on">Offline / Online <font color=red>*</font></label><br />
                <select id="off_on" name="type">
                    <option <?php if($editdata['st_shift']=="Online")  echo" selected"; ?> value="Online" selected="selected">Online</option>
                    <option <?php if($editdata['st_shift']=="Offline")  echo" selected"; ?>value="Offline">Offline</option>
                </select> 
                <br />
                <label for="city">City<font color=red>*</font></label><br />
                <select id="city" name="city">
                    <option <?php if($editdata['st_city']=="Ahmdabad")  echo" selected"; ?> value="Ahmdabad" selected="selected">Ahmdabad</option>
                    <option <?php if($editdata['st_city']=="surat")  echo" selected"; ?> value="surat">surat</option>
                    <option <?php if($editdata['st_city']=="Rajkot")  echo" selected"; ?> value="Rajkot">Rajkot</option>
                    <option <?php if($editdata['st_city']=="vadodara")  echo" selected"; ?> value="vadodara">vadodara</option>
                </select><br />
                <br/>
                <label for="Area">Area</label>
                <input id="pin" name="Area" type="area" value="<?php  echo $editdata['st_area'];    ?>" />
                <br>
                <br>
                <label for="pin">Pincode</label>
                <input id="pin" name="pin" type="number" maxlength="6" minlength="6" placeholder="Enter the Pin Code" value="<?php  echo $editdata['st_pincode'];?>" />
                <br>
                <input type="submit" value="SUBMIT"/>
            </form>
            </body>
 </html>