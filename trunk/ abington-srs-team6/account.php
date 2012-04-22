<?php require 'dbConnect.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Account Creation</title>
</head>
<body>
<h1>Accout Creation</h1>
<p>You entered the following information:<br />
Name: <?php $lname = trim($_POST['lname']); $fname = trim($_POST['fname']); $mname = trim($_POST['mname']);
					echo "{$fname} {$mname} {$lname}";
					
		?><br />
SSN: <?php $ssn = trim($_POST['ssn']); echo "{$ssn} "; ?><br />
DOB: <?php $dob = $_POST['dob']; echo "{$dob} "; ?><br />
Address: <?php $street = $_POST['street']; $city = trim($_POST['city']); $state = $_POST['state']; $zip = trim($_POST['zip']);
					echo "{$street} {$city} {$state} {$zip}";
		?><br />
Phone: <?php $phone = trim($_POST['phone']); echo "{$phone}";
 
 $user = strtolower(substr($fname, 0,1) . substr($lname, 0, 1) . substr(mname, 0,1));
 $parsedob = substr($dob, 6, 10);
 $username = $user.$parsedob;
     echo $username;
     
     $password = trim($_POST['pass']);
     echo $password;

 ?><br />


<?php


    $insert_sql = "INSERT INTO People (f_name, l_name, m_name, address, city, state, zip, ssc, dob, phone_number)" .
    "VALUES ('$fname', '$lname', '$mname', '$street', '$city', '$state', '$zip', '$ssn', '$dob', '$phone');";
	mysql_query($insert_sql)
      or die(mysql_error());
     $returned_id = mysql_insert_id(); //method to return the record identity just written

     
    

      $insert_second = "INSERT INTO user_cred(user_id, user_login, user_pass, access_lvl, account_status)" .
      "VALUES ('$returned_id', '$username', '$password', 0, 1);";
      mysql_query($insert_second)
      or die(mysql_error());

      
      ?>
      
					
		

</p>
</body>

</html>
