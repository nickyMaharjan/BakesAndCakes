<?php
include('./adminGuard.php');
?>

<html>
    <head>
        <style>
            *{
                padding:0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                background-color: #f3f3f3;
                font-family: Garamond;

            }
            .logo img{
                position:absolute;
                left:10px;
                float:left;
                width:150px;
                height:200px;
                background:#f3f3f3;
                }
            .Username{
                float:right;
                padding:5px 20px;
                border:1px solid white;
                margin-top:0px;
                margin-right:2px;
                font-family: Garamond;
            }
            .Username a{
                text-decoration:none;
                color:white;
                font-size:20px;
                transition: 0.6s ease;
            }
            .Username a:hover{
                        background-color:white;
                        color:black;
                    }
                    h1{
                grid-column: 1/-1;
                text-align:center;
            }
            h4{
                grid-column: 1/-1;
                text-align:center;
                font-weight:400;
                letter-spacing:3px;
                margin-bottom: 10px;
            }
            h1{
                grid-column: 1/-1;
                text-align:center;
            }
            h4{
                grid-column: 1/-1;
                text-align:center;
                font-weight:400;
                letter-spacing:3px;
                margin-bottom: 10px;
            }
            .heading{
                background-color:rgb(255, 132, 167);
                color:white;
                margin-bottom: 30px;
                padding: 30px 0;
                grid-column:1/-1;
                text-align:center;
                height: 180px;
            }
            .heading>h1{
                font-weight:400;
                font-size:30px;
                letter-spacing:10px;
                margin-bottom: 10px;
            }
            .heading>h3{
                font-weight: 600;
                font-size: 22px;
                letter-spacing: 5px;
            }
            .user-table {
                width: 100%;
                font-size: large;
                margin-top: 70px;
                /* border: 1px solid; */
            }

            .user-table th {
                border-bottom: 2px solid;
            }

            .user-table td {
                text-align: center;
                padding: 0;
                border-bottom: 1px solid black;
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
            <h3>&mdash; User list &mdash;</h3>
            <div class="Username">
            <?php
                if(isset($_SESSION['username'])){
                    //echo"<h4>".$_SESSION['username']."</h4>";
                    echo "<a href='userProfile.php'>".$_SESSION['username']."</a>";
                }
                else{
                    echo"<a href='login.php'>Log-in</a>";
                }
            ?>
            </div>
            <?php
                include('./connection.php');

                $query = "SELECT * FROM userinfo";
                $res = mysqli_query($conn, $query);
                echo "<table class='w3-table user-table'>";
                echo "<tr>";
                echo "<th>Customer id</th>";
                echo "<th>Full name</th>";
                echo "<th>Phone</th>";
                echo "<th>Email</th>";
                echo "<th>Address</th>";
                echo "<th>Username</th>";
                echo "</tr>";
                while($user_list = mysqli_fetch_assoc($res)) {
                    echo"<tr>";
                    echo "<td>".$user_list['c_id']."</td>";
                    echo "<td>".$user_list['Full_Name']."</td>";
                    echo "<td >".$user_list['Phone']."</td>";
                    echo "<td >".$user_list['Email']."</td>";
                    echo "<td >".$user_list['Address']."</td>";
                    echo "<td >".$user_list['Username']."</td>";
                    echo"</tr>";
                }
            ?>
</html>
