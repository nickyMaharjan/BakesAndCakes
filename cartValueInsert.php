<?php
include("connection.php");
$f_id=$_POST['f_id'];
echo "<br>".$f_id;
session_start();
if(isset($_SESSION['username'])){
    echo"<br>";
    echo $_SESSION['username'];
    $q_username = $_SESSION['username'];
    $fetch_cid="SELECT * FROM userinfo WHERE Username='$q_username'";
    $fetch_reuslt=mysqli_query($conn,$fetch_cid);
    $r_userid=mysqli_fetch_assoc($fetch_reuslt);
    echo "<br>".$r_userid['c_id']."<br>";
    $ar_userid=$r_userid['c_id'];

    try {
        mysqli_begin_transaction($conn);
        $q_cart = "SELECT * from cart where c_id = '$ar_userid'";
        $r_cart_result = mysqli_query($conn, $q_cart);
        $rows = mysqli_num_rows($r_cart_result);

        if ($rows == 0) {
            $q_insert="INSERT into cart (c_id) VALUES($ar_userid)";
            mysqli_query($conn, $q_insert);
            $cart_id = $conn->insert_id;
            echo "Created Cart: $cart_id";
        }
        else {
            $r_cart = mysqli_fetch_assoc($r_cart_result);
            $cart_id = $r_cart['cart_id'];
            echo "Using Existing Cart: $cart_id";
        }        
    
        $q_insert="INSERT into cart_food (cart_id,f_id) VALUES($cart_id,$f_id)";
        mysqli_query($conn, $q_insert);
        mysqli_commit($conn);
        echo"Data inserted";
        echo"<script> location.href='menu.php'</script>";
    }
    catch (Exception $e) {
        if (mysqli_errno($conn) == 1062) {
            echo "Duplicate aayo";
        }

        mysqli_rollback($conn);

        //Check if rows have been affected
	    if (mysqli_affected_rows($conn) == 0) {
            echo "No rows have been affected!<br />";
        } else {
            echo "Successfully completed the transaction!<br />";
            
        }
         
       // print_r( $e);
    }
    
}
?>
