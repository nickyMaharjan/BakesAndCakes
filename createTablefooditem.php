<?php
include("connection.php");
$table="CREATE TABLE fooditems(
    f_id int,
    f_name varchar(30),
    price int)";
$res=mysqli_query($conn,$table);
if(!$res){
    die("ERROR creating table due to ".mysqli_error($conn));
}
else{
    echo"Table created successfully";
}
?>
