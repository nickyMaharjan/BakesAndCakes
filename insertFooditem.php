<?php
include("connection.php");
$insert="INSERT into fooditems VALUES
(2,'White Forest Cake',250),
(3,'Ice-cream Cake',300),
(4,'Choco-chip cookies',250),
(5,'Wafer',100),
(6,'White bread',80)
";
$result=mysqli_query($conn,$insert);
$conn->commit();
if(!$result){
    die("ERROR inserting data into table due to ".mysqli_error($conn));
}
else{
    echo"Data inserted successfully";
}
?>