
<html lang="en">

<head>
  <title>CAR</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
    }

    /* Style the body */
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;

    }

    /* Header/logo Title */
    .header {
      padding: 200px;
     text-align:end;
      background-image:url(lamborghini-apis-concept.jpg);
      color: rgb(247, 238, 0);
    }

    /* Increase the font size of the heading */
    .header h1 {
      font-size: 40px;
    }

    /* Style the top navigation bar */
    .navbar {
      overflow: hidden;
      background-color: #333;
    }

    /* Style the navigation bar links */
    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }

    /* Right-aligned link */
    .navbar a.right {
      float: right;
    }

    /* Change color on hover */
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Column container */
    .row {
      display: -ms-flexbox;
      /* IE10 */

      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
    }

    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
      -ms-flex: 30%;
      /* IE10 */
      flex: 30%;
      padding: 20px;
    }

    /* Main column */
    .main {
      -ms-flex: 70%;
      /* IE10 */
      flex: 70%;
      background-color: white;
      padding: 20px;
    }

    /* Fake image, just for this example */
    .fakeimg {
      background-image:url(d.jpg);
      width: 100%;
      padding: 20px;
    }
    .tyr2{
      background-image:url(download.jpg);
      width: 100%;
      padding: 20px;
    }
    .tyr3{
      background-image:url(unnamed.jpg);
      width: 100%;
      padding: 20px;
    }
    .tyr {
      background-image:url(q12.jpg);
      width: 100%;
      padding: 20px;
    }    
    .tyr1 {
      background-image:url(r.jpg);
    
      
      width: 100%;

      padding: 20px;
    }
    .footer {
      padding: 20px;
      text-align: center;
      background: #ddd;
    }

    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 700px) {
      .row {
        flex-direction: column;
      }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      .navbar a {
        float: none;
        width: 100%;
      }
    }
  </style>
</head>

<body>

  
   <?php include "header.php"?>
    <div class="navbar">
      <a href="#">Home</a>
      <a href="#">Contact-us</a>
      <a href="#">About</a>
      <a href="#" class="right">Gallery</a>
    </div>

    <div class="row">
      <div class="side">
        <h2>COLLECTION</h2>
        <h5>Photo of car:</h5>
        <div class="fakeimg" style="height:200px ;width: 300px;">Image</div>
        <p>Ronaldo is one of the most recognizable sportsmen in the world. With a net worth of around $450 million, the Portuguese superstar is among the richest footballers in the world right now.
             Ronaldo's car collection is quite impressive as well. The 5-time Ballon d'Or winner has 20+ cars in his garage which together are worth around $5 million. From the Mercedes Benz C220 CDI to a Bugatti Veyron, let us take a look into:</p>
             <div class="tyr2" style="height:200px ;width: 300px;">Image</div>
      <p>
        One of the most expensive cars in Cristiano Ronaldo's collection, the Bugatti Veyron costs approximately $1.7 million and has been named after the racing driver Pierre Veyron. It can reportedly hit a top speed of 415 km/h!
      </p>
      <div class="tyr3" style="height:200px ;width: 300px;">Image</div>       
    </div>
      <div class="main">
        <h2>Ferrari</h2>
        <h5>Ferrari812 Dec 7, 2020</h5>
        <div class="tyr" style="height:200px; width: 300px; margin-left: 28%;">Image</div>
        <p>Some text..</p>
        <p>Throughout its history, the company has been noted for its continued participation in racing, especially in Formula One, where it is the oldest and most successful racing team, holding the most constructors championships and having produced the highest number of drivers' championship wins . Ferrari road cars are generally seen as a symbol of speed, luxury and wealth. Ferrari cars are built at the 165,000 square-meter (16.5-hectare) Maranello factory.</p>
        <br>
        <h2>Lamborghini</h2>
        <h5>Asterion,Sep 2, 2017</h5>
        <div class="tyr1" style="height:200px; width: 300px ; margin-left: 28%;">Image</div>
        <p>Some text..</p>
        <p> The Asterion is a unique concept car with a sensual design, the soul of a Lamborghini, and the DNA of a hybrid: the styles and cutting-edge engineering solutions typical of Lamborghini are combined with an innovative hybrid technology. The purity of the aspirated V10 engine guarantees the thrill of an exceptional driving experience, while the plug-in hybrid system enables the power of the electric motors to be harnessed for city driving. The result is incredible super sports performance.
          <br>
      ASTERION
    </p>
      </div>
    </div>


    <?php include "footer.php" ?>

</body>

</html>