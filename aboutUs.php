<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background-color: #f3f3f3;
    font-family: Garamond;
    margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 20px;
  text-align: center;
  background-color: rgb(255, 132, 167);
  color: white;
  height:180px;
}

.container {
  padding: 40px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.details{
    padding: 40px 20px;
    font-size: large;
    line-height: 1.5em;
}
.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: rgb(255, 132, 167);
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
    background-color:white;
  color: rgb(255,132,167);
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.logo img{
            position:absolute;
            left:10px;
            float:left;
            width:150px;
            height:200px;
            background:#f3f3f3;
        }
</style>
</head>
<body>
<div class="logo">
      <a href='frontPage.php'><img src="images/bakes-removebg-preview.png"></a>
</div>
<div class="about-section">
  <h1>About Us</h1>
  
  <h2>Bakes and Cakes</h2>
  <h4>'Freshly Baked Happiness'</h4>
</div>
<div class="details">
    <p>Bakes and Cakes is a well-known bakery that was established in 2006 by Jane Doe in a bustling neighborhood in the heart of the city. Jane who has a passion for baking, wanted to bring the taste of homemade, fresh baked goods to the community.

    The bakery offers a wide variety of sweet and savory baked goods, including cakes, pastries, bread, cookies, and muffins. All the products are made using high-quality ingredients, and the recipes are carefully crafted to ensure the best taste and texture.

    Bakes and Cakes quickly gained popularity in the local community due to the quality of their products and the excellent customer service. They also have a cozy and welcoming atmosphere that makes customers feel at home.

    Over the years, Bakes and Cakes has expanded its offerings, including catering services for events such as weddings, corporate events, and birthday parties. The bakery also provides customized cakes for special occasions such as weddings, baby showers, and graduations.

    Jane, the founder of Bakes and Cakes, is an experienced baker with a passion for creating unique and delicious baked goods. She has trained and mentored many young bakers and continues to share her knowledge and expertise with her team.

    In addition to her passion for baking, Jane is also committed to giving back to the community. Bakes and Cakes regularly donates leftover baked goods to local charities and organizations.

    Today, Bakes and Cakes is a beloved establishment in the city, known for its exceptional baked goods, friendly service, and community involvement.</p>
</div>
<h2 style="text-align:center;color: rgb(255, 132, 167);">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/aboutus1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">Founder & Baker</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/aboutus2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Baker</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/aboutus3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Baker</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<h2 style="text-align:center;color: rgb(255, 132, 167);margin-top: 80px">Reviews</h2>
  <div class="row">
    <div class="column">
    <div class="card">
      <div class="container">
        <h2>riya</h2>
        <p>The bakery website is visually appealing with high-quality images of baked goods that are sure to whet the appetite. The navigation menu is easy to use and intuitive, allowing customers to quickly find the information they need, including menu items, prices, and store hours. The website also offers online ordering and delivery options, making it convenient for customers to place orders and receive their baked goods.

One area for improvement could be adding more detailed descriptions of the products, including ingredients and nutritional information. Additionally, including customer reviews and ratings could help build trust and credibility with potential customers.

Overall, the bakery website is well-designed, user-friendly, and offers a variety of features that make it easy for customers to browse and order baked goods.</p>
      </div>
    </div>
    </div>
    <div class="column">
    <div class="card">
      <div class="container">
        <h2>nicky</h2>
        <p>The bakery website is well-designed, with clear navigation and high-quality images of the baked goods. Online ordering and delivery options are convenient, but more detailed product descriptions could be added. Overall, a user-friendly and appealing website for customers.</p>
      </div>
    </div>
    </div>
    <div class="column">
    <div class="card">
      <div class="container">
        <h2>alex</h2>
        <p>The bakery website is visually appealing and easy to navigate, with online ordering and delivery options. However, more detailed product descriptions and customer reviews would improve the user experience.</p>
      </div>
    </div>
    </div>
  </div>
</body>
</html>