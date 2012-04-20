<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Registration</title>
</head>

<body>
<h1>Student Information</h1>
<p>Please provide the following information to submit your registration request and create your account.</p>
<form action="account.php" method="post">
<table cellpadding="5" border="0">
<tr>
	<td>Last Name:</td> 
	<td><input type="text" name="lname" value="" /></td>
	<td>First Name:</td> 
	<td><input type="text" name="fname" value="" /></td>
	<td>Middle Name:</td> 
	<td><input type="text" name="mname" value="" /></td>
</tr>
<tr>
	<td>SSN (no dashes):</td>
	<td><input type="text" name="ssn" value="" /></td>
	<td>DOB (yyyymmdd):</td> 
	<td><input type="text" name="dob" value="" /></td>
</tr>
<tr>
	<td>Street Address:</td> 
	<td><input type="text" name="street" value="" /></td>
	<td>City/Town:</td>
	<td><input type="text" name="town" value="" /></td>
	</tr>
	<tr>
	<td>State:</td>
	<td><select name="state">
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
</select></td>
<td>Zip Code:</td>
<td><input type="text" name="zip" value="" /></td>
</tr>
<tr>
	<td>Phone (no dashes):</td>
 	<td><input type="text" name="phone" value="" /></td>
</tr>
</table>	
<input type="submit" name="btn_sub" value="Submit" />
<input name="Reset1" type="reset" value="Reset" />

</form>

</body>

</html>
