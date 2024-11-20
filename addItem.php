<?php
include('./adminGuard.php');
?>

<?php
 include("connection.php");
 $f_name=$_POST['food_name'];
 $price=$_POST['price'];
 $image=$_POST['image'];
 $description=$_POST['description'];

//  echo $f_name;
//  echo $price;
//  echo $image;
//  echo $description;

$insert="INSERT into fooditems(f_name,price,image,description) VALUES('$f_name',$price,'$image','$description')";
$r_insert=mysqli_query($conn,$insert);
echo mysqli_insert_id($conn);
mysqli_commit($conn);
echo"<script>location.href='Item.php'</script>";
?>