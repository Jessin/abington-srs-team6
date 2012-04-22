<?php
define ("DATABASE_HOST", "localhost");
define ("DATABASE_USERNAME", "jpj5048_SRSData");
define ("DATABASE_PASSWORD", "srsdb");
define ("DATABASE_NAME", "jpj5048_SRSData");
?>

<!--dbConnect.php file using require

=========================* //-->

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

<!--
//insert.php file with the record identity written returned

//========================================
//-->
