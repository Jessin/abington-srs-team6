<?php require 'dbConnect.php';
 ?>
 <html>
 <head> <title> Courses </title> </head>
 <body>
 <?php 
 
 
$result = mysql_query("SELECT * FROM Course_Schedule");
 
 
 echo "<table border='1'>
<tr>
<th>Course Schedule ID </th>
<th>Semester</th>
<th>Location</th>
<th>Capacity</th>
<th>Days</th>
<th>Class Start</th>
<th>Class End</th> 

</tr>";

while($row = mysql_fetch_array($result)){

$numsemester = $row['semester'];
$theSemester;

if($numsemester ==0)
{
$theSemester = "Fall";
}
else if ($numsemester == 1)
{
$theSemester = "Spring";
}
	echo "<tr>";

$daynumber = $row['day_id'];
$days;

if($daynumber == 0)
{
$days = "M W F";
}
else if($daynumber == 1)
{
$days = "T TH";
}
  echo "<td>" . $row['course_id'] . "</td>";
  echo "<td>" . $theSemester . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['capacity'] . "</td>";
  echo "<td>" . $days . "</td>";
  $timeslotnum = $row['time_id'];
  $getTime = mysql_query("SELECT class_start, class_end FROM Time_Slots WHERE time_id = $timeslotnum");
  $timeRow = mysql_fetch_array($getTime);
  echo "<td>" . $timeRow['class_start']. "</td>";
  echo "<td>" . $timeRow['class_end']. "</td>";
  

  echo "</tr>";
    }
echo "</table>";
 ?>
 


</body>
</html>