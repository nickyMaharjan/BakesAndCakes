<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('images/thankyou.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
.message{
    position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.message p{
    color: white;
    font-size: large;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}
.logo img{
            position:absolute;
            top:5px;
            left:10px;
            float:left;
            width:150px;
            height:200px;
        }
</style>
<body>

<div class="bgimg">
<div class="logo">
      <a href='frontPage.php'><img src="images/bakes-removebg-preview.png"></a>
</div>
  <div class="middle">
    <h1>Your order has been placed!</h1>
    <hr>
    <p>Please return frequently :)</p>
  </div>
</div>
<?php

include('connection.php');

$cart_id=$_POST['cart-id'];
$empty_cart="DELETE FROM cart where cart_id='$cart_id'";
$r_empty_cart=mysqli_query($conn,$empty_cart);
mysqli_commit($conn);
if($r_empty_cart){
    echo"<div class='message'>";
    echo"<p>Your cart is now empty</p>";
    echo"</div>";
}
?>

</body>
</html>