<?php
include("connection.php")
$db="CREATE Database bakes";
$res=mysqli_query($conn,$db);
if(!$res){
    die("ERROR creatinf database");
}
else{
    echo"database created successfully";
}