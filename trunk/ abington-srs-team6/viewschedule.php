<?php require 'dbConnect.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>View Schedule</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">

//var checkcourse = /^[0-9]{1,6}$/;

$(document).ready(function() {
alert("bob");
	
	$("#addcourse").click(function() {
		if ($("#addtext").val()=="")
		{
		alert("Course number is required to add a course.");
		return false;
		}
		
		
		});
		
	$("#dropcourse").click(function() {
		if ($("#droptext").val()=="")
		{
		alert("Course number is required to drop a course.");
		return false;
		}
		
		
		});

		
	


});
</script>
</head>

<body>
<form id="form" action="" method="POST">

<table id="courses">
<tr>
<td><input type="button" id="addcourse" name="addcourse" value="Add a Class" /></td>
<td><input type="text" id="addtext" name="addtext" /></td>
</tr>
<tr>
<td><input type="button" id="dropcourse" name="dropcourse" value="Drop a Class" /></td>
<td><input type="text" id="droptext" name="droptext" /></td>
</tr>
</table>
</form>
<input type="button" id="logout" name="logout" value="Log Out" />
</body>

</html>
