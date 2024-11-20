<?php
include('./adminGuard.php');
?>

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
            left: 10px;
            float: left;
            width: 150px;
            height: 200px;
            background: #f3f3f3;
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

        .navlink {
            border: 1px solid #f584a4;
            padding: 10px 30px;
            color: white;
            transition: 0.6s ease;
            font-size: 25px;
            margin-top: 30px;
            width: 50%;
            float: left;
        }

        .navlink a {
            text-decoration: none;
        }

        .item-container {
            display: flex;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="logo">
        <a href='frontPage.php'><img src="images/bakes-removebg-preview.png"></a>
    </div>
    <div class="heading">
        <h1>Bakes and Cakes</h1>
        <h4>'Freshly Baked Happiness'</h4><br>
        <h3>&mdash; Admin's Panel &mdash;</h3>
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
        <div class="item-container">
            <div class='navlink'>
                <a href="Item.php">View item</a>
            </div>
            <div class='navlink'>
                <a href="viewUser.php">View User</a>
            </div>
        </div>
</body>

</html>