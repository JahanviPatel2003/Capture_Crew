<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
    
        body
        {
            background-image: url('38.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            margin-left: auto;
            margin-right: auto;
        }
        #form
        {
            text-align: center;
            padding: 5%;
            background-color: rgb(212, 28, 65,0.3);
        }
        .link
        {
            color:yellow;
            font-weight: 300px;
            
        }
        /* .col-sm-6{
          margin-top: 8%;
          margin-bottom: 7%;
        }
        .col-sm-4{
          margin-top: 6.5%;
          margin-bottom: 4%;
        } */

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
    
    <div class="row" style="margin-top: 5%;margin-left:5%">
               
               <div class="col-sm-6">
                  
                       <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                           <div class="carousel-indicators">
                             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                           </div>

                           <div class="carousel-inner">
                             <div class="carousel-item active">
                               <img src="4.jpg" class="d-block w-100" alt="...">
                               <div class="carousel-caption d-none d-md-block">
                                 <h5>Let's find the best photographer</h5>
                               </div>
                             </div>

                             <div class="carousel-item">
                               <img src="5.jpg" class="d-block w-100" alt="...">
                               <div class="carousel-caption d-none d-md-block">
                                 <h5>Confused about the photo-shooting location?</h5>
                                 <p>No worries!! Let's see some nearest locations</p>
                               </div>
                             </div>

                             <div class="carousel-item">
                               <img src="2.jpg" class="d-block w-100" alt="...">
                               <br>
                               <div class="carousel-caption d-none d-md-block">
                                 <h5 style="color:darkblue;">Can't find Camera on rent?</h5>
                                 <p style="color: darkblue;">Why worried? I'm here!!</p>
                               </div>
                             </div>

                           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                           </button>

                           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Next</span>
                           </button>

                         </div>

                       </div> 

                       <br>

               </div>
                          
               <div class="col-sm-4">

                       <form action = "#" method = "post" id="form">

                           <h2>Welcome Back!!</h2>

                           <br>

                           <div class="form-floating mb-3" id = col-xs-3>
                             <input type="email" class="form-control" id="email" placeholder="name@example.com" name = "email" required>
                             <label for="floatingInput">Email address</label>
                           </div>

                           <div class="form-floating">
                             <input type="password" class="form-control" id="password" placeholder="Password" name = "password" required>
                             <label for="floatingPassword">Password</label>
                           </div>

                           <br>

                           <button class="btn btn-primary" name = "login" onclick = "validate()">Login</button>

                           <br>

                           <br>

                           <a href = "forgotpass.php" class="link" style="text-decoration: none;">Forgot Password?</a>
                     
                           <br>
                     
                           <br>
                     
                           <a href = "registration.php" class="link" style="text-decoration: none;">Don't have an account?</a>
       
                       </form>
               
               </div>

               <div class="col-sm-2">

               </div>

       </div>

   </div>

   <br>
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

        <?php

            if(isset($_POST["login"]))
            {
                $email = $_POST["email"];
                $password = $_POST["password"];

                $db = mysqli_connect('localhost','root','simple','CAPTURE_CREW_CAPASTRONE');

                if(!$db)
                {
                    die("Can't connect to database".mysqli_error());
                }
                else
                {
                    $sql1 = mysqli_query($db,"SELECT Password FROM USER_REGISTRATION WHERE Email = '$email';");
                    $sql2 = mysqli_query($db,"SELECT Password FROM PHOTOGRAPHER_REGISTRATION WHERE Email = '$email';");
                    while ($row = $sql1->fetch_assoc()) 
                    {
                        if($row['Password'] == $password )
                        {
                            echo "<script>window.location.assign('Feature.php');</script>";
                        }
                    }
                    while ($row2 = $sql2->fetch_assoc()) 
                    {
                        if($row2['Password'] == $password )
                        {
                            echo "<script>window.location.assign('Photographer_Profile_Update.php');</script>";
                        }
                    }
                    echo "<script>alert('Check your input');</script>";
                }
            }
            else
            {
                $email = " ";
                $password = " ";
            }

        ?>

</body>
</html>