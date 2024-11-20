<?php session_start(); ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="menuStyle.css"/> -->
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

        .menu {
            padding: 0 10px 30px 10px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax (350px, 1fr));
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

        .food-items {
            flex: 1 1 300px;
            max-width: 350px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
        }

        .food-items img {
            position: relative;
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .food-items-container {
            display: flex;
            /* overflow-y: hidden;
            overflow-x: visible; */
            flex-wrap: wrap;
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
            margin-bottom: 10px;
        }

        .details {
            padding: 20px 10px;
            display: grid;
            grid-template-rows: auto 1fr 50px;
            grid-row-gap: 15px;
        }

        .details-sub {
            display: grid;
            grid-template-columns: auto auto;
        }

        .details-sub>h5 {
            font-weight: 600;
            font-size: 18px;
        }

        .price {
            text-align: right;
        }

        .details>p {
            color: #6f6f6f;
            font-size: 15px;
            line-height: 28px;
            font-weight: 400;
            align-self: stretch;
        }

        form>button {
            background-color: rgb(255, 132, 167);
            border: none;
            color: #ffffff;
            font-size: 20px;
            font-weight: 600;
            border-radius: 5px;
            width: 180px;
            height: 50px;
        }

        input[type=hidden] {
            height: 0px;
            width: 0px;
        }

        .Username {
            float: right;
            padding: 5px 20px;
            border: 1px solid white;
            margin-top: 0px;
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
            margin-bottom: 10px;
        }

        .already-added {
            color: #f584a4;
            font-size: large;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="menu">
        <div class="logo">
            <a href='frontPage.php'><img src="images/bakes-removebg-preview.png"></a>;
        </div>
        <div class="heading">
            <h1>Bakes and Cakes</h1>
            <h4>'Freshly Baked Happiness'</h4><br>
            <h3>&mdash; MENU &mdash;</h3>
            <div class="Username">
                <?php
                if (isset($_SESSION['username'])) {
                    //echo"<h4>".$_SESSION['username']."</h4>";
                    echo "<a href='userProfile.php'>" . $_SESSION['username'] . "</a>";
                } else {
                    echo "<a href='login.php'>Log-in</a>";
                }
                ?>
            </div>
        </div>

        <div class="food-items-container">
            <?php
            include('./connection.php');

            $disable_items = [];
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                $cart_query = "select *
                    from cart
                    join userinfo
                        on userinfo.c_id = cart.c_id
                    join cart_food
                        on cart.cart_id = cart_food.cart_id
                    join fooditems
                        on cart_food.f_id = fooditems.f_id
                    where userinfo.Username = '$username'";
                $cart_res = mysqli_query($conn, $cart_query);
                while ($_item = mysqli_fetch_assoc($cart_res)) {
                    array_push($disable_items, $_item['f_id']);
                }
            }

            $food_query = "SELECT * FROM fooditems;";
            $food_res = mysqli_query($conn, $food_query);
            while ($fitem = mysqli_fetch_assoc($food_res)) {
                echo "<div class='food-items'>";
                echo "<img src='" . $fitem['image'] . "'>";
                echo "<div class='details'>";
                echo "<div class='details-sub'>";
                echo "<h5>" . $fitem['f_name'] . "</h5>";
                echo "<h5 class='price'>" . $fitem['price'] . "</h5>";
                echo "</div>";
                echo "<p>" . $fitem['description'] . "</p>";
                if (isset($_SESSION['username'])) {

                    if (in_array($fitem['f_id'], $disable_items)) {
                        echo "<span class='already-added'>Item is already added.</span>";
                    } else {
                        echo "<form action='cartValueInsert.php' method='post'>";
                        echo "<button>Add to cart</button>";
                        echo "<input type='hidden' name='f_id' value='" . $fitem['f_id'] . "'/>";
                        echo "</form>";
                    }
                } else {
                    echo "<span class='already-added'>You need to login before adding to cart.</span>";
                }
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>