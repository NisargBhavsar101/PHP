<html>
<body style="background-color:red">
<h1 style="text-align: center; background-color:chartreuse"> REGISTRATION FORM</h1>
<form action="process.php" method="POST" >
<table style="margin-left:36%; " border='100'  >
<tr> 
<td>FIRST-NAME : </td>
<td> <input type="text" name="txt1" required /> </td>
</tr>
<tr> 
<td>MIDDLE-NAME : </td>
<td> <input type="text" name="txt2" required /> </td>
</tr>
<tr> 
<td>LAST-NAME : </td>
<td> <input type="text" name="txt3" required /> </td>
</tr>
<tr> 
<td>Contact-Number : </td>
<td> <input type="tel" name="txt4" maxlength="10" required /> </td>
</tr>
<tr> 
<td>E-MAIL : </td>
<td> <input type="email" name="txt5"  required /> </td>
</tr>
<tr> 
<td>AGE : </td>
<td> <input type="number" name="txt6"  min='1' max='100'  required /> </td>
</tr>
</table>
<table style="margin-left:36%; ">
 <tr >
 <td>
 <button style="margin-left: 47%; text-align:center; padding: 30px; background-color: #4CAF50">
 <input type="submit" value="Submit">
 </td>
 <td>
 <button style="margin-left: 180%; text-align:center; padding: 30px; background-color: #4CAF50">
 <input type="Reset" value="Reset">
</td>
 </button>
 </button>
</tr>
<table>
</form>
</body>
</html>