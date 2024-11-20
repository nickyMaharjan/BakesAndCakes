<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            font-family:Garamond;
        }
        header{
          background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/doughnut.jpg);  
          height:100vh;
          background-size:cover;
          background-position:center;
        }
        ul{
            list-style-type:none;
            float:right;
            margin-top:25px;
        }
        ul li{
            display:inline-block;
        }
        ul li a{
            text-decoration:none;
            color:#fff;
            padding:5px 20px;
            border:1px solid transparent;
            transition: 0.6s ease;
            font-size:25px;
        }
        ul li.active a{
            background-color:white;
            color:black;
        }
        ul li a:hover{
            background-color:white;
            color:black;
        }
        .logo img{
            float:left;
            width:150px;
            height:auto;
        }
        .main{
            max-width:1200px;
            margin:auto;
        }
        .title{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        .title h1{
            color:white;
            font-size:70px;
        }
        .button{
            position:absolute;
            top:60%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        .btn{
            border:1px solid white;
            padding:10px 30px;
            color:white;
            text-decoration:none;
            transition: 0.6s ease;
            font-size:25px;
        }
        .btn:hover{
            background-color:white;
            color:black;
        }
        .button2{
            position:absolute;
            top:90%;
            left:80%;
            transform:translate(-50%,-50%);
        }
        </style>
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="images/bakes-removebg-preview.png">;
             </div>
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="aboutUs.php">About us</a></li>
                <li><a href="contactUs.php">Contact us</a></li>
            </ul>
        </div>
        <div class="title">
            <h1>Bakes and Cakes</h1>
    </div>
    <?php
                session_start();
                    if(isset($_SESSION['username'])){
                        ?>
                            <div class="button">
                                <a href="userProfile.php" class="btn"><?php echo $_SESSION['username'] ?></a>
                            </div>
                        <?php }
                        else{?>
                            <div class="button">
                                <a href="login.php" class="btn">Log-in</a>
                                <a href="signup.php" class="btn">Sign-up</a>
                            </div>
                            
                            <?php } ?>
                        </header>
</body>
</html>