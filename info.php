<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>

<?php
$servername = "localhost";
$username = "devika";
$password = "password123";
$db = "project";
$conn = mysqli_connect($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connect failed: ".$conn->connect_error);
}
?>
<h1 align="center">PHP Project</h1>
<table border="1" align="center">
<tr>
  <td>Student Name</td>
  <td>Major</td>
</tr>
<?php

$query = mysqli_query($conn, "SELECT * FROM student_table")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['student']}</td>
    <td>{$row['major']}</td>
   </tr>\n";

}

?>
</table>
<a href="index1.php"><strong>Show Data</a>
</body>
</html>