<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background-color: #f3f3f3;
    font-family: Garamond;
}

* {
  box-sizing: border-box;
}
.logo img{
            position:absolute;
            top:5px;
            left:10px;
            float:left;
            width:150px;
            height:200px;
            background:#f3f3f3;
        }
.heading{
    background-color:rgb(255, 132, 167);
    color:white;
    margin-bottom: 20px;
    padding: 20px 0;
    grid-column:1/-1;
    text-align:center;
    height: 180px;
}
h4{
    text-align:center;
    font-weight:400;
    letter-spacing:3px;
    margin:0px;
}
.heading>h1{
    font-weight:400;
    font-size:30px;
    letter-spacing:10px;
    margin:0px;
}
.heading>h3{
    font-weight: 600;
    font-size: 22px;
    letter-spacing: 5px;
}
.Username{
    float:right;
    padding:5px 15px;
    border:1px solid white;
    margin-top:-20px;
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

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: rgb(255,132,167);
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:white;
  color: rgb(255,132,167);
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.button{
    background-color: rgb(255,132,167);
    border:none;
    color:#ffffff;
}
/* .column img{
    width: 200px;
    height:500px;
} */
</style>
</head>
<body>
<div class="logo">
<a href='frontPage.php'><img src="images/bakes-removebg-preview.png"></a>
             </div>
        <div class="heading">
            <h1>Bakes and Cakes</h1>
            <h4>'Freshly Baked Happiness'</h4><br>
            <h3>&mdash; Contact Us &mdash;</h3>
            <div class="Username">
                <?php
                session_start();
                    if(isset($_SESSION['username'])){
                        //echo"<h4>".$_SESSION['username']."</h4>";
                        echo "<a href='userProfile.php'>".$_SESSION['username']."</a>";
                    }
                    else{
                        echo"<a href='login.php'>Log-in</a>";
                    }
                    ?>
            </div>
        </div>

<div class="container">
  <div class="row">
    <div class="column">
      <img src="images/contactus6.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">User Name</label>
        <input type="text" id="lname" name="username" placeholder="Your user name..">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your address..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" name="submit" value="Submit" class="button">
      </form>
    </div>
  </div>
</div>
<?php 
if(isset($_POST['submit'])){
    echo"<script> location.href='http://localhost:8080/BakesAndCakes/thankyou.php'</script>";
}
?>
</body>
</html>