<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Registration</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">

var checkname = /^[A-Za-z]{2,25}$/;
var checkssn = /^[1-9]{1}([0-9]{8})$/;

var checkdob = /^(0[1-9]|1[012])[\/](0[1-9]|[12][0-9]|3[01])[\/]((?:19|20)\d\d)$/;
var checkstreet = /^[A-Za-z0-9\. ]{2,25}$/;
var checkcity = /^[A-Za-z ]{2,15}$/;
var checkzip = /^[0-9]{5}$/;
var checkphone = /^[2-9]{1}([0-9]{9})$/;
var checkpass = /^[A-Za-z0-9\&\@\#\$ ]{8,12}$/;



$(document).ready(function () {

	alert("bob");
	  	
  		
	$("#btn_sub").click(function() {
		
		if (!checkname.test($("#lname").val()))
		{
			alert("Name fields must be letters only, between 2-25 characters.");
		 	return false;
		}
		 
		else if(!checkname.test($("#fname").val()))
		{
			alert("Name fields must be letters only, between 2-25 characters.");
		 	return false;
		}
		else if(!checkname.test($("#mname").val()))
		{
			alert("Name fields must be letters only, between 2-25 characters.");
		 	return false;
		}
		else if(!checkssn.test($("#ssn").val()))
		{
			alert("SSN is nine digits without spaces, and may not begin with a zero.");
		 	return false;
		}
		else if(!checkdob.test($("#dob").val()))
		{
			alert("DOB must be valid and in the shown format.");
		 	return false;
		}

		else if(!checkstreet.test($("#street").val()))
		{
			alert("Street Address must be between 2 and 25 characters, with no special characters (except .).");
		 	return false;
		}
		else if(!checkcity.test($("#city").val()))
		{
			alert("City must be between 2 and 15 characters, with no numbers or special characters.");
		 	return false;
		}
		else if(!checkzip.test($("#zip").val()))
		{
			alert("Zip code must be 5 digits.");
		 	return false;
		}
		else if(!checkphone.test($("#phone").val()))
		{
			alert("Phone is ten digits (no spaces or dashes). First digit must be 2 or higher");
		 	return false;
		}
		else if(!checkpass.test($("#pass").val()))
		{
			alert("Password must be between 8 and 12 characters, and can contain letters, numbers, and the following special characters (&@#$).");
		 	return false;
		}
		else if(!($("#pass").val() === $("#pass2").val()))
		{
			alert("Passwords do not match.");
		 	return false;
		}
	}); 
	});
	


</script>
</head>

<body>
<h1>Student Information</h1>
<p>Please provide the following information to submit your registration request and create your account.</p>
<form id="form" action="account.php" method="POST">
<table id="table">
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
		<td><input type="text" id="street" name="street" /></td>
		<td>City/Town: </td>
		<td><input type="text" id="city" name="city" /></td>
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
		<td><input type="text" id="zip" name="zip" /></td>
		<td>Phone (no dashes): </td>
		<td><input type="text" id="phone" name="phone" /></td>
	</tr>
	<tr> 
	<td></td>
	</tr>
	<tr>
		<td>Create your password: </td>
		<td><input type="text" id="pass" name="pass" /></td>
	</tr>
	
	<tr>
		<td>Confirm password:</td>
		<td><input type="text" id="pass2" name="pass2" /></td>
	</tr>

</table>
<input type="submit" id="btn_sub" name="btn_sub" value="Submit" />
<input name="Reset1" id="reset" type="reset" value="Reset" />
</form>

</body>

</html>
