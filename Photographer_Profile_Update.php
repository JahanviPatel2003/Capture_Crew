<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Profile</title>
  <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->

  <style>
     @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
      *{
            font-family: 'Roboto', sans-serif;  
      }  
    body{
      background-image: url('17.jpg');
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .container{
      max-width: 500px;
      margin-left: auto;
      margin-right: auto;
      margin-top:15px ;
      margin-bottom:15px ;
      padding: 1em;
    }
    .container h1{
      text-align: center;
      font-weight: 700;
      color: #000;
      font-size: 30px;
      margin-bottom: 20px;
    }
      .profile-pic {
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        color: transparent;
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: all 0.3s ease;
        width: 170px;
    }
    
    .profile-pic input {
      display: none;
    }
    .profile-pic img {
      position: absolute;
      object-fit: cover;
      width: 165px;
      height: 165px;
      box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);
      border-radius: 100px;
      z-index: 0;
    }
    .profile-pic .label {
      cursor: pointer;
      height: 165px;
      width: 165px;
    }
    .profile-pic:hover .label {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.8);
      z-index: 10000;
      color: #fafafa;
      transition: background-color 0.2s ;
      border-radius: 100px;
      margin-bottom: 0;
    }
    .profile-pic span {
      display: inline-flex;
      padding: 0.2em;
      height: 2em;
    }
    #form
    {
      background-color: #eee; 
      padding: 5%;
      box-shadow: 10px 10px 5px gray;
    }
    
    .upload-btn-wrapper input[type=file] {
      font-size: 10px;
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
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
    <div class = "container">
      <form method = "post" id = "form">
        <h1 class="heading">My Profile</h1>

      <div class="profile-pic">
        <img src = "9.jpg" class="profile" id="output" width="200" />
        <label class="label" for="file">
          <span class="glyphicon glyphicon-camera"></span>
          <span>Change Image</span>
        </label>
        <input id="file" type="file" name = "pic" onchange="loadFile(event)"/>
      </div>
      <div class="form-floating mb-3">

        <div class="row g-3">
          <div class="col">
            <input type="text" class="form-control" placeholder="Name" aria-label="Name" name = "name" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="City" aria-label="City" name = "city" required>
          </div>
        </div>
      </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Price per order" aria-label="Price" name = "price" required>
        </div>
        <br>
        <label for="floatingSelect">Which kind of photography you do?</label>
        <br>
        <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox1" value = "Wedding" name = "type">
            <label class="form-check-label" for="inlineCheckbox1">Wedding</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" value = "Birthday" name = "type">
            <label class="form-check-label" for="inlineCheckbox2">Birthday</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox3" value = "Pre-Wedding" name = "type">
            <label class="form-check-label" for="inlineCheckbox3">Pre Wedding</label>
          </div>
          
          <br>
          <br>
          <label for="floatingPassword">Upload your best work</label>
          <br>
          <br>

          <div class="form-floating mb-3">
            <div class="col">
              <div class="col-mb-4">
                <input type="file" class="form-control" id="floatingPassword" placeholder="Password" name = "work1" required>
              </div>
              <div class="col-mb-4">
                <input type="file" class="form-control" id="floatingPassword" placeholder="Password" name = "work2" required>
              </div>
              <div class="col-mb-4">
                <input type="file" class="form-control" id="floatingPassword" placeholder="Password" name = "work3" required>
              </div>
            </div>

          </div>
          <button class = "btn btn-primary" style="text-align: center;margin-left: 35%;" name = "update">Update Profile</button>
      </form>
    </div>       
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
                  
      <script>
         var loadFile = function (event) {
          var image = document.getElementById("output");
          image.src = URL.createObjectURL(event.target.files[0]);
        };

      </script>

        <?php

            if(isset($_POST["update"]))
            {
              $pic = $_POST["pic"];
              $name = $_POST["name"];
              $city = $_POST["city"];
              $price = $_POST["price"];
              $type = $_POST["type"];
              $work1 = $_POST["work1"];
              $work2 = $_POST["work2"];
              $work3 = $_POST["work3"];
              $db = mysqli_connect('localhost','root','simple','CAPTURE_CREW_CAPASTRONE');

              if(!$db)
              {
                  die("Can't connect to database".mysqli_error());
              }
              
                
              $sql = mysqli_query($db,"INSERT INTO PHOTOGRAPHER(Name,City,Price,Type,Pic,Work1,Work2,Work3) VALUES ('$name','$city','$price','$type','$pic','$work1','$work2','$work3');");
              if(!$sql)
              {
                  echo "Data can't submitted successfully<br><br>";
              }
              echo "<script>alert('Profile updated successfully');</script>";
              // echo "<script>window.location.assign('index.html');</script>";
            }
            else 
            {
              $pic = " ";
              $name = " ";
              $city = " ";
              $price = " ";
              $wedding = " ";
              $birthday = " ";
              $pre = " ";
              $work1 = " ";
              $work2 = " ";
              $work3 = " ";
            }


        ?>


  </body>
  </html>
  