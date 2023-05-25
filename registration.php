<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
       *{
          margin: 0;
            padding: 0;
       }
        body
        {
            margin: 0;
            padding: 0;
            background-image: url('11.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }
        .form-content
        {
            width: 100%;
            height: 100vh;
            padding:1rem;    
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
   <br>
   <br>
    <div class="form-content">
        <div class="wrapper">
            <div class="title-text">
               <div class="title login">
                  User Registration
               </div>
               <div class="title signup">
                  Photographer Registration
               </div>
            </div>
            <div class="form-container">
               <div class="slide-controls">
                  <input type="radio" name="slide" id="hospital" checked>
                  <input type="radio" name="slide" id="signup">
                  <label for="hospital" class="slide login">User</label>
                  <label for="signup" class="slide signup">Photographer</label>
                  <div class="slider-tab"></div>
               </div>
               <div class="form-inner">
                  <form action="#" class="hospital" method = "post">
                     <div class="field">
                        <input type="email" placeholder="Email Address" name = "user_email" required>
                     </div>
                     <div class="field">
                        <input type="password" placeholder="Password" name = "user_password" id = "user_password" required>
                        <!-- <span id = "error" style="color: red;"></span> -->
                     </div>
                     <div class="field">
                        <input type="password" placeholder="Confirm Password" name = "user_confirm_password" id = "user_confirm_password" required>
                     </div>
                     <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Register" name = "usubmit" onsubmit="validation()">
                     </div>
                     <br>
                     <br>
                     <div style="text-align: center;">
                        Already have an account? <a href="Login.php">Sign In now</a>
                     </div>
                     <br>
                  </form>
                  <form action="#" class="signup" method = "post">
                     <div class="field">
                        <input type="email" placeholder="Email Address" name = "photographer_email" required>
                     </div>
                     <div class="field">
                        <input type="password" placeholder="Password" name = "photographer_password" id = "photographer_password" required>
                     </div>
                     <div class="field">
                        <input type="password" placeholder="Confirm Password" name = "photographer_confirm_password" id = "photographer_confirm_password" required>
                     </div>
                     <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Register" name = "psubmit" onsubmit="check()">
                     </div>
                     <br>
                     <br>
                     <div style="text-align: center;">
                       Already have an account? <a href="Login.php">Sign In now</a>
                    </div>
                    <br>
                  </form>
               </div>
            </div>
         </div>
      

         <script>
            const loginText = document.querySelector(".title-text .login");
            const loginForm = document.querySelector("form.hospital");
            const loginBtn = document.querySelector("label.login");
            const signupBtn = document.querySelector("label.signup");
           //  const signupLink = document.querySelector("form .signinh-link a");
            signupBtn.onclick = (()=>{
              loginForm.style.marginLeft = "-50%";
              loginText.style.marginLeft = "-50%";
            });
            loginBtn.onclick = (()=>{
              loginForm.style.marginLeft = "0%";
              loginText.style.marginLeft = "0%";
            });
         </script>
    </div>

   <!-- <script>
   
      function validation()
      {
            var user_password = document.getElementById("user_password").value;
            var user_confirm_password = document.getElementById("user_confirm_password").value;

            if(user_password.length < 8)
            {
               document.getElementById("error").innerHTML = "Password must contain atleast 8 characters";
            }
      }

   </script> -->
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

            if(isset($_POST["usubmit"]))
            {
               $email = $_POST["user_email"];
               $password = $_POST["user_password"];

               $db = mysqli_connect('localhost','root','simple','CAPTURE_CREW_CAPASTRONE');

               if(!$db)
               {
                  die("can't connect to the database".mysqli_error());
               }
               else
               {
                  $sql = mysqli_query($db,"INSERT INTO USER_REGISTRATION(Email, Password) VALUES ('$email','$password');");
                  if(!$sql)
                  {
                     die("Can't enter the data".mysqli_error());
                  }
                  echo "<script>window.location.assign('Login.php');</script>";
               }
            }
            else
            {
               $email = " ";
               $password = " ";
            }
            
            if(isset($_POST["psubmit"]))
            {
               $photographer_email = $_POST["photographer_email"];
               $photographer_password = $_POST["photographer_password"];

               $db = mysqli_connect('localhost','root','simple','CAPTURE_CREW_CAPASTRONE');

               if(!$db)
               {
                  die("can't connect to the database".mysqli_error());
               }
               else
               {
                  $sql = mysqli_query($db,"INSERT INTO PHOTOGRAPHER_REGISTRATION(Email, Password) VALUES ('$photographer_email','$photographer_password');");
                  if(!$sql)
                  {
                     die("Can't enter the data".mysqli_error());
                  }
                  echo "<script>window.location.assign('Login.php');</script>";
               }
            }
            else
            {
               $photographer_email = " ";
               $photographer_password = " ";
            }

      ?>

</body>
</html>