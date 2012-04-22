<?php require 'dbConnect.php';
 ?>
 
 <html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>check login</title>
</head>
<body>
<?php 
$username = $_POST['username']; echo $myusername;
$password = $_POST['password']; echo $mypassword;

$myusername = stripslashes($username);
$mypassword = stripslashes($password);

$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM user_cred WHERE user_login='$myusername' and user_pass='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
/*
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
*/

$row = mysql_fetch_array($result);
echo $row[user_id];

}
else {
echo "Wrong Username or Password";
}


?>
</body>

</html>