<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Registration</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">

var check_name = /^[A-Za-z]{2,25}$/;
var check_ssn = /^[1-9]{1}([0-9]{8})$/;
var check_dob = ^(19|20)\d\d(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01])$
var check_add = /^[A-Za-z0-9\.]{2,25}$/;
var check_city = /^[A-Za-z]{2,15}$/;
var check_zip = /^[1-9]{1}([0-9]{4})$/;
var check_phone = /^[2-9]{1}([0-9]{9})$/;
var check_pass = /^[1-9]{1}([0-9]{8})$/;



$(document).ready(function () {

	$("#lname, mname, fname").blur(function(){
		var input = $(this).val();
		if (!check_name.test(input)){
		alert("Name fields must be letters only, between 2-25 characters.");
		}
		});
		
	$("#ssn").blur(function(){
		var input = $(this).val();
		if (!check_ssn.test(input)){
		alert("SSN field is nine digits (no dashes) and may not begin with a zero.");
		}
		}); 
		/
	$("#dob").blur(function(){
		var input = $(this).val();
		if (!check_dob.test(input)){
		alert("DOB must be a valid date in YYYYMMDD format (digits only).");
		}
		});
		
	$("#add").blur(function(){
		var input = $(this).val();
		if (!check_add.test(input)){
		alert("Address must be between 5 and 35 characters, no special characters.");
		}
		});

	$("#city").blur(function(){
		var input = $(this).val();
		if (!check_city.test(input)){
		alert("City must be letters only and between 2 and 15 characters");
		}
		});

	$("#zip").blur(function(){
		var input = $(this).val();
		if (!check_zip.test(input)){
		alert("SSN field is nine digits (no dashes) and may not begin with a zero.");
		}
		});

	$("#phone").blur(function(){
		var input = $(this).val();
		if (!check_phone.test(input)){
		alert("SSN field is nine digits (no dashes) and may not begin with a zero.");
		}
		});

	$("#pass").blur(function(){
		var input = $(this).val();
		if (!check_pass.test(input)){
		alert("SSN field is nine digits (no dashes) and may not begin with a zero.");
		}
		});

});



}
</script>
</head>

<body>
<h1>Student Information</h1>
<p>Please provide the following information to submit your registration request and create your account.</p>
<form action="account.php" method="POST">
<table>
	<tr>
		<td>Last Name: </td>
		<td><input type="text" id="lname" name="lname" /></td>
		<td>First Name: </td>
		<td><input type="text" id="fname" name="fname" /></td>
		<td>Middle Name: </td>
		<td><input type="text" id="mname" name="mname" /></td>
	</tr>
	<tr>
		<td>SSN (no dashes): </td>
		<td><input type="text" id="ssn" name="ssn" /></td>
		<td>DOB (mm/dd/yyyy): </td>
		<td><input type="text" id="dob" name="dob" /></td>
	</tr>
	<tr>
		<td>Street Address: </td>
		<td><input type="text" id="street" name="street" value="" /></td>
		<td>City/Town: </td>
		<td><input type="text" id="city" name="city" value="" /></td>
		<td>State: </td>
		<td><select id="state" name="state">
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Zip Code: </td>
		<td id="blah"><input type="text" id="zip" name="zip" value="" /></td>
		<td>Phone (no dashes): </td>
		<td><input type="text" id="phone" name="phone" value="" /></td>
	</tr>
	<tr> 
	<td></td>
	</tr>
	<tr>
		<td>Create your password: </td>
		<td><input type="text" id="pass" name="pass" value="" /></td>
	</tr>
	
	<tr>
		<td>Confirm password:</td>
		<td><input type="text" id="pass2" name="pass2" value="" /></td>
	</tr>

</table>
<input type="submit" id="btn_sub" name="btn_sub" value="Submit" />
<input name="Reset1" id="reset" type="reset" value="Reset" />
</form>

</body>

</html>
