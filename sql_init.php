
<?php

$con=mysqli_connect("127.0.0.1", "root", "1")
    OR die('Could not connect to database.');
echo "DB sys connected!<br>";

mysqli_query($con,'set names utf8');

$db_selected = mysqli_select_db($con, "iotdb");

if (!$db_selected) {
  // If we couldn't, then it either doesn't exist, or we can't see it.
  	$qr = 'CREATE DATABASE iotdb';

  	if (mysqli_query($con, $qr)) {
    	echo "Database iotdb created successfully </br>";
	} else {
      echo 'Error creating database: ' . mysql_error() . "\n";
  	}
}else{
	echo "IoT DB entered <br>";
// }
}

?>

