<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="header.css"> 
  <link rel="stylesheet" href="footer.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Location</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
 
      *,
      {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style: none;
        list-style-type: none;
        text-decoration: none;
            
      }

      body {
        font-size: 1rem;
        font-weight: normal;
        line-height: 1.5;
        text-align: center;
        background-color:#fff;
        font-family: 'Roboto', sans-serif; 
      }
      .main h1{
        text-align: center;
        font-size: 40px;
        color: #000;
        font-weight: 700;
        text-shadow:1px 2px #999 ;
        margin-bottom: 20px;
      }
      @media (max-width: 443px) {
        .main > h1 
        { 
          font-size: 28px; 
        }
      }
      .card-wrapper-1{
        background: #f7e0f3;
        margin: 20px;
        padding-bottom: 20px;
      }
      .card-wrapper-2{
        background: #e0e6f7;
        margin: 20px;
        padding-bottom: 20px;
      }
      .card-wrapper-3{
        background: #fff9e6;
        margin: 20px;
        padding-bottom: 20px;
      }
      h2{
        text-align: center;
        font-size: 24px;
        color: #000;
        font-weight: 700;
        padding-top: 10px;
      }
      @media (max-width: 443px) {
        .card-wrapper-1 > h2 
        { 
          font-size: 20px; 
        }
      }
      @media (max-width: 443px) {
        .card-wrapper-2 > h2 
        { 
          font-size: 20px; 
        }
      }
      @media (max-width: 443px) {
        .card-wrapper-3 > h2 
        { 
          font-size: 20px; 
        }
      }
      .container{
        max-width: 80rem;
        width: 100%;
        padding: 2rem 2rem;
        margin: 0 auto;
      }

      .main .container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 1rem;
        justify-content: center;
        align-items: center;
      }
      .main .card-image {
        position: relative;
        display: block;
        width: 100%;
        padding-top: 70%;
        background: #ffffff;
      }
      .main .card-image img {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      @media only screen and (max-width: 600px) {
        .main .container {
          display: grid;
          grid-template-columns: 1fr;
          grid-gap: 1rem;
        }
      }
      .btn {
        width: fit-content;
        border: none;
        font-size: 15px;
        font-weight: bold;
        margin: 0 auto;
        padding: 8px 8px;
        border-radius: 5px;
        background-color:#627EDC;
      }
      .btn a{
        text-decoration: none;
        color: black;
        font-family: 'Roboto', sans-serif;   
      }
      .btn a:hover{
        color: #e8ecfa;
        cursor: pointer;
      }
      button{
        width: fit-content;
        border: none;
        font-size: 15px;
        font-weight: bold;
        margin: 10px;
        padding: 8px 8px;
        border-radius: 5px;
        background-color:#627EDC;
      }
      button:hover{
        color: #e8ecfa;
        cursor: pointer;
      }
  </style>
</head>
<body>
<section class="nav-bar">
      <div class="nav-container">
        <div class="logo">
          <a href="#">Capture Crew</a>
        </div>
        <nav>
          <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
          <ul class="nav-list">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="Login.php">Login</a>
            </li>
            <li>
              <a href="registration.php">Registration</a>
            </li>
            <li>
              <a href="AboutUs.html">About Us</a>
            </li>
            <li>
              <a href="ContactUs.html">Contact Us</a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="function.js"></script>

    <br>

    <!-- <div class="row" style = "text-align:center;">

    <form style="padding: 3rem;width: 36rem;">
<div class="row">

  <div class="col-sm-6">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="location" placeholder="name@example.com">
      <label for="floatingInput">Search Location</label>
      </div>
  </div>
  <div class="col-sm-6" style="margin-left:-6rem;">
    <button onclick = "location()"><i class = "fa fa-search"></i></button>
  </div>
</div>
     
    </form>
    
    </div> -->

  <main class="main">
    <h1>All Locations</h1>
    <div class="card-wrapper-1">
      <h2>Thol Lake</h2>
      <div class="container">
        <div class="card">
          <div class="card-image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Thol_Lake_-_Gujarat%2C_India_-_Flickr_-_Emmanuel_Dyan_%2812%29.jpg/1024px-Thol_Lake_-_Gujarat%2C_India_-_Flickr_-_Emmanuel_Dyan_%2812%29.jpg" alt="Thol Lake">
          </div>
        </div>
        <div class="card">
          <div class="card-image">
              <img src="https://ahmedabadtourism.in/images/tourist-places/thol-lake-ahmedabad/thol-lake-ahmedabad-tourism-tourism-opening-time-closing.jpg" alt="Thol Lake">
          </div>
        </div>
        <div class="card">
          <div class="card-image">
              <img src="https://ahmedabadtourism.in/images/tourist-places/thol-lake-ahmedabad/thol-lake-ahmedabad-tourism-tourism-entry-fee.jpg" alt="Thol Lake">
          </div>
        </div>
      </div>
      <div class="location">
        <p>
          <span class="btn"><a href="https://goo.gl/maps/adsP4urQLsrsepde7">View location on Map</a></span>
          <span><Button>Select this Location</Button></span>
        </p>
      </div>
    </div>

    <div class="card-wrapper-2">
      <h2>Polo Forest</h2>
      <div class="container">
        <div class="card">
          <div class="card-image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Polo_Monument_and_Vijaynagar_Forest-_Jain_Temples.jpg/1024px-Polo_Monument_and_Vijaynagar_Forest-_Jain_Temples.jpg" alt="Polo Forest">
          </div>
        </div>
        <div class="card">
          <div class="card-image">
              <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/ea/d3/22/img-20180910-120041773.jpg?w=1000&h=-1&s=1" alt="Polo Forest">
          </div>
        </div>
        <div class="card">
          <div class="card-image">
              <img src="https://www.cityshor.com/uploads/article/08_2014/1408618055_IMG_5552.jpg" alt="Polo Forest">
          </div>
        </div>
      </div>
      <div class="location">
        <p>
          <span class="btn"><a href="https://goo.gl/maps/5p3woMsdSyvZVrd56">View location on Map</a></span>
          <span><Button>Select this Location</Button></span>
        </p>
      </div>
    </div>

    <div class="card-wrapper-3">
      <h2>Wilson Hill</h2>
      <div class="container">
        <div class="card">
          <div class="card-image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Wilson_Hills_Road.JPG/272px-Wilson_Hills_Road.JPG" alt="Wilson Hill">
          </div>
        </div>
        <div class="card">
          <div class="card-image">
              <img src="https://thrillblazers.in/wp-content/uploads/2020/07/dang4-870x555.jpg" alt="Wilson Hill">
          </div>
        </div>
        <div class="card">
          <div class="card-image">
              <img src="https://2.bp.blogspot.com/-4kumHVk5BS4/WyZuvlOySoI/AAAAAAAAA2k/XavIf3TftkcKWxfXn9plv84fQmapeerEQCLcBGAs/s1600/wilson%2Bhill%2Bstation%2B01.jpg" alt="Wilson Hill">
          </div>
        </div>
      </div>
      <div class="location">
        <p>
          <span class="btn"><a href="https://goo.gl/maps/LaXzZ3jZeh7xscpC9">View location on Map</a></span>
          <span><Button>Select this Location</Button></span>
        </p>
      </div>
    </div>

  </main>
  <div class="footer-content"> 
      <div class="footer">
        <div class="footer-left">
          <h3>Capture Crew</h3>
          <div class="footer-links">
            <p><a href="index.html">Home</a></p>
            <p><a href="Feature.php">Feature</a></p>
            <p><a href="AboutUs.html">About</a></p>
            <p><a href="ContactUs.html">Contact</a></p>
          </div>	
        </div>
  
        <div class="footer-center">
          <p class="footer-contact">Contact Us</p>
          <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Gujarat, India</p>
          </div>
  
          <div>
            <i class="fa fa-phone"></i>
            <p><a href="tel:91-9876543210">+91 9876543210</a></p>
          </div>
  
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:#">abc123@gmail.com</a></p>
          </div>
        </div>
  
        <div class="footer-right">
          <p class="footer-about">
            <span>About Us</span>
            We help people to find a photographer as well as to take camera on rent.
          </p>
  
          <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
        <div class="footer-line">
          <p>&copy; All Right Reserved</p>
        </div>
      </div>
      <div id="main">
        
      </div>

      <script>

        function location()
        {
          var input = document.getElementById("location").value;

          if(input == "Ahmedabad")
          {
           document.getElementById("main").innerHTML = "";
          }
        }

      </script>

</body>
</html>