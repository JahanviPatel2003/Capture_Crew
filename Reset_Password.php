<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">

    

    <style>
            
        body
        {
            background-image: url('16.jpg');
            background-repeat: no-repeat;
            background-size: cover;
           
        }  
        .row {
            background-color: rgba(153, 214, 255, 0.6);
            color: #fff;
            text-align: center;
            padding: 2em 2em 0.5em;
            margin: 2em auto;
            border-radius: 5px;
        }
        .row h1 
        {
            font-size: 2.5em;
            color: #000;
            margin-bottom:10px ;
        }
        .row .form-group 
        {
            margin: 0.5em 0;
        }
        .row .form-group label 
        {
            display: block;
            color: #000;
            text-align: left;
            font-weight: 700;

        }
        .row .form-group input
        {
            display: block;
            padding: 8px;
            width: 100%;
            margin-top: 1em;
            margin-bottom: 0.5em;
            background-color: white;
            border-radius: 5px;
            color: #eee;
            border:none;
        }
        
        .row .form-group input:focus{
            background-color: #fff;
            color: #000;
            padding-left: 8px;

        }
        .row .form-group button {
            border: none;
            border-radius: 5px;
            outline: none;
            width: 100%;
            font-size:18px;
            color: #fff;
            background-color: #045a7c;
            font-weight: 700;
            cursor: pointer;
            margin-top: 2em;
            padding: 1em;
        }
        .row .form-group button:hover,
        .row .form-group button:focus{
            background-color: #4d7c8f;
            color: #000;
            border:none;
        }
        
        .row .login h5 {
        margin-top: 1em;
        margin-bottom: 1em;
        color: #000;
        font-size:18px; 
        }
    
        @media screen and (max-width: 320px) {
        .row {
            padding-left: 1em;
            padding-right: 1em;
        }
        .row h1 {
            font-size: 1.5em !important;
        }
        }
        @media screen and (min-width: 900px) {
        .row {
            width: 50%;
        }
        }
        /* .form
        {
            text-align: center;
            padding: 4%;
            position:absolute;
            top: 10%;
            background-color:white;
            box-shadow:10px 10px 5px rgba(26, 25, 25, 0.7);
        }
        body
        {
            background-color:skyblue;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="function.js"></script>
    
	<div class="row">
  <form method="post" class="form">
                    <i class = "fa fa-lock fa-4x"></i>
                    <br>
		<div class="form-group">
			<p><label for="email">Email</label></p>
            <input type="email" name="email" id="email" placeholder="Email">
                       
            <label for="password">New Password</label>
            <input type="password" id="newpassword"  name = "password" placeholder="New Password" required>

            <label for="confirmpass">Confirm Password</label>
            <input type="password"  id="confirmpassword"  name = "confirm_password" placeholder="Confirm Password"required>
             
			<button name = "reset">Reset</button>
		</div>
		<div class="login">
        <h5>Back to <a href="Login.php">Login</a></h5>
		</div>
	</div>
      </form>
    
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



    <!-- <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <form method="post" class="form">
                    <i class = "fa fa-lock fa-4x"></i>
                    <br>
                    <h2>Reset Password</h2>
                    <br>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Password" name = "email" required>
                        <label for="floatingInput">Email</label>
                      </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Password" name = "password" required>
                        <label for="floatingInput">New Password</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" name = "confirm_password" required>
                        <label for="floatingPassword">Confirm Password</label>
                      </div>
                      <br>
                      <button class = "btn btn-primary" name = "reset">Reset</button>
                      <div class="form-floating mb-3">
                          <br>
                      <a href = "Login.php" style="text-decoration: none">Login</a>
                      </div>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div> -->
     <?php

        if(isset($_POST["reset"]))
        {
            $email = $_POST["email"];
            $new_password = $_POST["password"];

            $db = mysqli_connect('localhost','root','simple','CAPTURE_CREW_CAPASTRONE');

            if(!$db)
            {
                die("Can't connect to database".mysqli_error());
            }
            else
            {
                $sql1 = mysqli_query($db,"SELECT * FROM USER_REGISTRATION WHERE Email = '$email';");
                $sql2 = mysqli_query($db,"SELECT * FROM PHOTOGRAPHER_REGISTRATION WHERE Email = '$email';");

                while ($row = $sql1->fetch_assoc()) 
                {
                    if($row['Email'] == $email )
                    {
                        $sql3 = mysqli_query($db,"UPDATE USER_REGISTRATION SET Password = '$new_password' WHERE Email = '$email';");
                        echo "<script>alert('Password updated successfully');</script>";
                    }
                }
                while ($row2 = $sql2->fetch_assoc()) 
                {
                    if($row2['Email'] == $email )
                    {
                        $sql4 = mysqli_query($db,"UPDATE PHOTOGRAPHER_REGISTRATION SET Password = '$new_password' WHERE Email = '$email';");
                        echo "<script>alert('Password updated successfully');</script>";
                    }
                }
        }
        }

    ?>

</body>
</html>