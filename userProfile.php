<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<style>
     body{
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/login5.jpg);
            background-size:cover;
            height:100vh;
            overflow:hidden;
            }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background:white;
  padding:5px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.button:hover, a:hover {
  opacity: 0.7;
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
</head>
<body>
<div class="logo">
      <a href='frontPage.php'><img src="images/bakes-removebg-preview.png"></a>
</div>
<div class="card">
<h2 style="text-align:center">User Profile</h2>
  <img src="images/blankProfile.jpg" alt="Profile" style="width:100%">
  <?php
  session_start();
  echo"<h1>Username: ".$_SESSION['username']."</h1>";

  include 'connection.php';
  
    $fetch="SELECT * FROM userinfo WHERE Username='".$_SESSION['username']."'";
    $res=mysqli_query($conn,$fetch);
    $r_fetch=mysqli_fetch_assoc($res);
    if($r_fetch['is_admin']!=1){
    echo"<p>";
    echo"<form action='viewCart.php' method='post'>";
        echo"<input type='submit' name='viewCart' class='button' value='View Cart'/>";
    echo"</form>";
     }?>
    <br>
    <form action="logout.php" method="post">
        <input type='submit' name='logout' class='button' value='Log-out'/>
    </form>
    </p>
</div>

</body>
</html>