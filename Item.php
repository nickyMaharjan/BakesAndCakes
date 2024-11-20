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

        .add-item-container {
            border: 1px solid white;
            padding: 10px 30px;
            color: black;
            text-decoration: none;
            transition: 0.6s ease;
            font-size: 25px;
            margin-top: 60px;
        }

        .add-item-container input {
            font-size: large;
        }

        .view-user-container {
            border: 1px solid white;
            padding: 10px 30px;
            color: white;
            text-decoration: none;
            transition: 0.6s ease;
            font-size: 25px;
        }

        .food-table {
            width: 100%;
            font-size: large;
            /* border: 1px solid; */
        }

        .food-table th {
            border-bottom: 2px solid;
        }

        .food-table td {
            text-align: center;
            padding: 0;
            border-bottom: 1px solid black;
        }

        a.food-image {
            color: black;
            background-color: transparent;
        }

        a.food-image img {
            height: 1em;
            width: auto;
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
        <h3>&mdash; Item list &mdash;</h3>
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


        <div class='add-item-container'>
            <form action="addItem.php" method="post">
                <label>
                    Name:
                    <input type="text" name="food_name" />
                </label>
                <label>
                    Price:
                    <input type="number" name="price" />
                </label>
                <br>
                <label>
                    Image:
                    <input type="text" name="image" />
                </label>
                <br>
                <label>
                    Description:
                    <input type="text" name="description" />
                </label>
                <br>
                <br>
                <input type="submit" value="Add new item" />
            </form>
        </div>


        <?php
        include('./connection.php');

        $query = "SELECT * FROM fooditems;";
        $res = mysqli_query($conn, $query);
        echo "<table class='w3-table food-table'>";
        echo "<tr>";
        echo "<th>Food item</th>";
        echo "<th>Price</th>";
        echo "<th>Description</th>";
        echo "<th>Image</th>";
        echo "</tr>";
        while ($fitem = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>" . $fitem['f_name'] . "</td>";
            echo "<td>" . $fitem['price'] . "</td>";
            echo "<td class='food-description'>" . $fitem['description'] . "</td>";
            echo "<td><a class='food-image' href='" . $fitem['image'] . "' target='_blank'><img src='" . $fitem['image'] . "' /></a></td>";
            echo "<tr>";
        }
        ?>