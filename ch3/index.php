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
$result1 = mysqli_query($connect, $query);

// result for method two 
$result2 = mysqli_query($connect, $query);

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    //$dataRow = $dataRow."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td></tr>";
}

?>
