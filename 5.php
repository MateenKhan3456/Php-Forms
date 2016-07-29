<center>
<form method="get" action="#">
<label>First Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="20" style="height:7%;width:19%;" name="fname" placeholder="Enter First name"/><br/>
<label>Last Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" maxlength="20" style="height:7%;width:19%;" name="lname" placeholder="Enter Last name"/><br/>
<label>Phone number:</label>&nbsp;&nbsp;&nbsp;<input type="phone" maxlength="11" style="height:7%;width:19%;"name="phoneno" placeholder="Enter Phone no"/><br/>
Comments:&nbsp;&nbsp;&nbsp;&nbsp;<textarea cols="30" rows="15" wrap="soft" name="comments"></textarea><br/>
<input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type='reset' name='reset' value="Reset">
</form>
</center>
<?php
if(isset($_GET['submit'])){
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];
	$phoneno=$_GET['phoneno'];
	$comments=$_GET['comments'];
	
?>
<center>
<table border="5">
<tr ><th>First Name</th>
	 <th>Last Name</th>
	 <th>Phone No</th>
	 <th>Comments</th>
</tr>
<tr>
<td><?php echo $fname;?></td>
<td><?php echo $lname;?></td>
<td><?php echo $phoneno;?></td>
<td><?php echo $comments;?></td>
</tr>
</table>
<center>
<?php
}
?>