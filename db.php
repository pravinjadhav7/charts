<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "charts";	


try {
	$dbh = new PDO('mysql:dbname=charts;host=localhost', $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
  ?>
