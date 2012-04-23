<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>


<?php
define ("DATABASE_HOST", "localhost");
define ("DATABASE_USERNAME", "jpj5048_SRSData");
define ("DATABASE_PASSWORD", "srsdb");
define ("DATABASE_NAME", "jpj5048_SRSData");
?>

//dbConnect.php file using require

=========================

<?php
//require 'app_config.php';

//1. Create a database connection
//handle is a reference to the connection
//$connection = mysql_connect("server", "user", "password");
$connection = mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD);
 if (!$connection)
 {
     die("Database connection failed:" . mysql_error());
 }
//2. Select a database to use
$db_select = mysql_select_db(DATABASE_NAME, $connection);
if (!$db_select){
   die("Database selection failed:" . mysql_error());
}
?>

</body>

</html>