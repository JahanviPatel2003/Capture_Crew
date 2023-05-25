<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Take Camera on rent</title>
  <link rel="stylesheet" href="header.css"> 
  <link rel="stylesheet" href="footer.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <style>

    .main
    {
      display: flex;
      flex-flow: row wrap;
      justify-content: space-around;
    }
    .item
    {
      width: 50%;
      height: 50%;
    }
    body
    {
      background-image: url('17.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    #item:hover
    {
      transform: scale(1.01);
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
 <br>
 
  <div class="container">
    <div class="row">
      <div class="col-sm-4" >
        <div class="card text-center" id = "item">
          <div class="card-body">
            <img src = "cam1.jpg" class="card-img-top">
              <h5 class="card-title">Nikon D7000</h5>
              <p class="card-text">Rs. 500 per Day</p>
              <a href="Payment.php" class="btn btn-primary">Select Camera</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center" id = "item">
          <div class="card-body">
            <img src = "2.jpg" class="card-img-top">
              <h5 class="card-title">Mi-4c</h5>
              <p class="card-text">Rs. 400 per Day</p>
              <a href="Payment.php" class="btn btn-primary">Select Camera</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center" id = "item">
          <div class="card-body">
            <img src = "cam3.jpg" class="card-img-top">
              <h5 class="card-title">ILCE-6300</h5>
              <p class="card-text">Rs. 450 per Day</p>
              <a href="Payment.php" class="btn btn-primary">Select Camera</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <div class="card text-center" id = "item">
          <div class="card-body">
            <img src = "cam4.jpg" class="card-img-top">
              <h5 class="card-title">Canon EOS 5D Mark IV</h5>
              <p class="card-text">Rs. 550 per Day</p>
              <a href="Payment.php" class="btn btn-primary">Select Camera</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center" id = "item">
          <div class="card-body">
            <img src = "cam5.jpg" class="card-img-top">
              <h5 class="card-title">Canon EOS 20D</h5>
              <p class="card-text">Rs. 500 per Day</p>
              <a href="Payment.php" class="btn btn-primary">Select Camera</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center" id = "item">
          <div class="card-body">
            <img src = "28.jpg" class="card-img-top">
              <h5 class="card-title">ILCE-7M3</h5>
              <p class="card-text">Rs. 400 per Day</p>
              <a href="Payment.php" class="btn btn-primary">Select Camera</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
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
</body>
</html>