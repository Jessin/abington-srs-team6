<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Student Registration System</title>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="file:///C:/Users/Henry/Desktop/Class info/Semester 4 - Spring 2012/IST 256/validation/js/languages/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="file:///C:/Users/Henry/Desktop/Class info/Semester 4 - Spring 2012/IST 256/validation/js/jquery.validationEngine.js"></script>
<link rel="stylesheet" href="file:///C:/Users/Henry/Desktop/Class info/Semester 4 - Spring 2012/IST 256/validation/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../../Class%20info/Semester%204%20-%20Spring%202012/IST%20256/SRS/SRS/css/murphstyle.css" />
<script>
	

$(document).ready(function(){
	    $("#myform").validationEngine();
    
    });
	
</script>
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.html">
				<img src="../../Class%20info/Semester%204%20-%20Spring%202012/IST%20256/SRS/SRS/images/logo.jpg" alt="Logo" /></a>
			</div>
			<div id="navigation">
				<div>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="current"><a href="registration.php">Register</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="content">
		<div>
		
			<b class="first"><strong>Student Registration Information</strong></b>
			<form id="myform" action="account.php" method="POST">
<table id="table">
	<tr>
		<td style="width: 180px"><label for="lname">Last Name: </label><input type="text" id="lname" name="lname" class="validate[required,custom[checkname]]"/></td>
		<td style="width: 180px"><label for="fname">First Name: </label><input type="text" id="fname" name="fname" class="validate[required,custom[checkname]]"/></td>
		<td style="width: 170px"><label for="mname">Middle Name: </label><input type="text" id="mname" name="mname" class="validate[required,custom[checkname]]"/></td>
	</tr>
	<tr> 
	<td style="width: 180px"></td>
	<td style="width: 180px"></td>
	<td style="width: 170px"></td>
	</tr>
	<tr>
		<td style="width: 180px"><label for="ssn">SSN (no dashes): </label><input type="text" id="ssn" name="ssn" class="validate[required,custom[checkssn]]"/></td>
		<td style="width: 180px"><label for="dob">DOB (mm/dd/yyyy): </label><input type="text" id="dob" name="dob" class="validate[required,custom[checkdob]]"/></td>
	</tr>
	<tr> 
	<td style="width: 180px"></td>
	<td style="width: 180px"></td>
	</tr>
	<tr>
		<td style="width: 180px"><label for="street">Street Address: </label><input type="text" id="street" name="street" class="validate[required,custom[checkstreet]]"/></td>
		<td style="width: 180px"><label for="city">City/Town: </label><input type="text" id="city" name="city" class="validate[required,custom[checkcity]]"/></td>
		<td style="width: 170px"><label for="state">State: </label><select id="state" name="state">
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
	<td style="width: 180px"></td>
	<td style="width: 180px"></td>
	</tr>
	<tr>
		<td style="width: 180px"><label for="zip">Zip Code: </label><input type="text" id="zip" name="zip" class="validate[required,custom[checkzip]]"/></td>
		<td style="width: 180px"><label for="phone">Phone (no dashes): </label><input type="text" id="phone" name="phone" class="validate[required,custom[checkphone]]"/></td>
	</tr>
	<tr> 
	<td style="width: 180px"></td>
	<td style="width: 180px"></td>
	</tr>
	<tr>
		<td style="width: 180px"><label for="pass">Create your password: </label><input type="text" id="pass" name="pass" class="validate[required,custom[checkpass]]"/></td>
	</tr>
	
	<tr>
		<td style="width: 180px"><label for="pass2">Confirm password: </label><input type="text" id="pass2" name="pass2" class="validate[required,equals[pass]]"/></td>
	</tr>

</table>
<br />
<input type="submit" id="btn_sub" name="btn_sub" value="Submit" />
<input name="Reset1" id="reset" type="reset" value="Reset" />
</form></p>
		</div>
	</div>
	
	</div>
</body>
</html>