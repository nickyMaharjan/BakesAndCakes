<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "bakes";

$conn = mysqli_connect($hostname, $username, $password, $db);
mysqli_autocommit($conn, FALSE);
if (!$conn) {
    die("ERROR connecting to database due to " . mysqli_connect_error($conn));
}
// echo"Connection established";
