<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 740px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
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
    margin-bottom: 30px;
    /* padding: 40px 0; */
    grid-column:1/-1;
    text-align:center;
    height: 180px;
}
.heading>h1{
    font-weight:400;
    font-size:30px;
    letter-spacing:10px;
    margin-bottom: 10px;
    padding-top: 10px;
}
body{
    background-color: #f3f3f3;
    font-family: Garamond;

}
.Username{
    float:right;
    padding:5px 20px;
    border:1px solid white;
    font-family: Garamond;
    margin-right: 2px;
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
</style>
</head>
<body>
      <div class="logo">
          <a href='frontPage.php'><img src="images/bakes-removebg-preview.png"></a>
      </div>
      <div class="heading">
        <h1>Bakes and Cakes</h1>
        <h4>'Freshly Baked Happiness'</h4>
        <h3>&mdash; GALLERY &mdash;</h3>
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
        
<div class="gallery">
    <img src="images/gallery1.jpg" alt="Cinque Terre" width="1000" height="400">
  <div class="desc">The image displays an array of creatively decorated sugar cookies, featuring designs made with white icing and a variety of vibrant colored frosting.</div>
</div>

<div class="gallery">
    <img src="images/gallery2.jpg" alt="Forest" width="1000" height="400">
  <div class="desc">The image captures the interior of a bustling bakery, filled with shelves and cases of freshly baked bread, pastries, and other delectable treats. </div>
</div>

<div class="gallery">
    <img src="images/gallery3.jpg" alt="Northern Lights" width="1000" height="400">
  <div class="desc">The image showcases an assortment of essential baking tools, including measuring cups and spoons, mixing bowls, spatulas, whisks, and rolling pins, all neatly arranged on a clean and organized countertop.</div>
</div>

<div class="gallery">
    <img src="images/gallery4.jpg" alt="Mountains" width="1000" height="400">
  <div class="desc">The image features a freshly baked batch of golden-brown cookies, still warm from the oven and emitting the sweet aroma of butter and vanilla.</div>
</div>

</body>
</html>