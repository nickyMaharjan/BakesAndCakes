<html>

<head>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f3f3f3;
            font-family: Garamond;

        }

        .logo img {
            position: absolute;
            top: 5px;
            left: 10px;
            float: left;
            width: 150px;
            height: 200px;
            background: #f3f3f3;
        }

        .heading {
            background-color: rgb(255, 132, 167);
            color: white;
            margin-bottom: 30px;
            padding: 30px 0;
            grid-column: 1/-1;
            text-align: center;
            height: 180px;
        }

        .heading>h1 {
            font-weight: 400;
            font-size: 30px;
            letter-spacing: 10px;
            margin-bottom: 10px;
        }

        .heading>h3 {
            font-weight: 600;
            font-size: 22px;
            letter-spacing: 5px;
        }

        .Username {
            float: right;
            padding: 5px 20px;
            border: 1px solid white;
            margin-top: -20px;
            margin-right: 2px;
            font-family: Garamond;
        }

        .Username a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            transition: 0.6s ease;
        }

        .Username a:hover {
            background-color: white;
            color: black;
        }

        h1 {
            grid-column: 1/-1;
            text-align: center;
        }

        h4 {
            grid-column: 1/-1;
            text-align: center;
            font-weight: 400;
            letter-spacing: 3px;

        }

        .cart-table {
            width: 100%;
            font-size: large;
            /* border: 1px solid; */
        }

        .cart-table th {
            border-bottom: 2px solid;
        }

        .cart-table td {
            text-align: center;
            padding: 0;
            border-bottom: 1px solid black;
        }

        .cart-total {
            font-size: larger;
            text-align: center;
        }

        form.checkout-form {
            width: 100%;
        }

        .checkout-container {
            float: right;
            border: 1px solid white;
            padding: 10px 30px;
            width: 100%;
            text-decoration: none;
            transition: 0.6s ease;
            font-size: 25px;
            text-align: right;
        }

        .payment-container {
            float: left;
            width: 80%;
        }

        .checkout-btn-container {
            float: left;
            width: 20%;
        }

        .checkout-btn-container input {
            font-size: large;
            padding: 5px 15px;
        }
    </style>
</head>
<div class="logo">
    <a href='frontPage.php'><img src="images/bakes-removebg-preview.png"></a>;
</div>
<div class="heading">
    <h1>Bakes and Cakes</h1>
    <h4>'Freshly Baked Happiness'</h4>
    <h3>&mdash; Your Cart &mdash;</h3>
    <div class="Username">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            //echo"<h4>".$_SESSION['username']."</h4>";
            echo "<a href='userProfile.php'>" . $_SESSION['username'] . "</a>";
        } else {
            echo "<a href='login.php'>Log-in</a>";
        }
        ?>
    </div>
</div>
<?php
include("connection.php");
$username = $_SESSION['username'];
$your_cart = "select *
    from cart
    join userinfo
    	on userinfo.c_id = cart.c_id
    join cart_food
        on cart.cart_id = cart_food.cart_id
    join fooditems
        on cart_food.f_id = fooditems.f_id
    where userinfo.Username = '$username'";

$r_your_cart = mysqli_query($conn, $your_cart);
$num_your_cart = mysqli_num_rows($r_your_cart);
echo "<div class='cart-total'>There are <b>$num_your_cart</b> items in your cart</div>";
echo "<table class='w3-table cart-table'>";
echo "<tr>";
echo "<th>Food item</th>";
echo "<th>Price</th>";
echo "</tr>";
$cart_id = -1;
while ($cart_items = mysqli_fetch_assoc($r_your_cart)) {
    echo "<tr>";
    echo "<td>" . $cart_items['f_name'] . "</td> ";
    echo "<td>" . $cart_items['price'] . "</td>";
    echo "</tr>";

    $cart_id = $cart_items['cart_id'];
}
echo "</table>";

?>
<div class='checkout-container'>
    <form class="checkout-form" action="checkout.php" method="post">
        <div class="payment-container">
            <input type="hidden" name='cart-id' value="<?php echo $cart_id; ?>" />
            <label><input type="radio" name="payment-mode" value="cash" checked />Cash on delivery</label>&nbsp;
            <label><input type="radio" name="payment-mode" value="online" disabled />Pay online</label>
        </div>
        <div class="checkout-btn-container">
            <input type="submit" name="checkout" value="Check out" />
        </div>
    </form>
</div>

</html>