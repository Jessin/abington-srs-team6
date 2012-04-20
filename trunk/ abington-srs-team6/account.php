<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Account Creation</title>
</head>
<body>
<h1>Accout Creation</h1>
<p>You entered the following information:<br />
Name: <?php $lname = $_POST['lname']; $fname = $_POST['fname']; $mname = $_POST['mname'];
					echo "{$fname} {$mname} {$lname}";
					;
		?><br />
SSN: <?php $ssn = $_POST['ssn']; echo "{$ssn} "; ?><br />
DOB: <?php $dob = $_POST['dob']; echo "{$dob} "; ?><br />
Address: <?php $street = $_POST['street']; $city = $_POST['city']; $state = $_POST['mname']; $ip = $_POST['zip']
					echo "{$street} {$city} {$state} {$zip}";
		?><br />
Phone: <?php $phone = $_POST['phone']; echo "{$phone}"; ?><br />
					
		

</p>
</body>

</html>
