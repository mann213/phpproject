<?php
// php populate html table from mysql database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "test";

// connect to mysql
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query

$query = "SELECT * FROM `persons`";


// result for method one
$result = mysqli_query($connect, $query);

$dataRow = "";
$json = array();

while($row = mysqli_fetch_array($result))
{
  $json[] = $row;
}
echo json_encode(['records'=>$json]);

?>
