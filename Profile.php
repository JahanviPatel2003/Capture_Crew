<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographers Profile</title>
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>

        body
        {
        
            background-image: url('30.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        #image
        {
            border-radius: 1rem;
        }
        #profile
        {
            padding: 1rem;
        }
        /* #work:hover
        {
            transform: scale(1.2);
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
    <?php

$db = mysqli_connect('localhost','root','simple','CAPTURE_CREW_CAPASTRONE');

if(!$db)
{
    die("Can't connect to database".mysqli_error());
}
$sql = mysqli_query($db,"SELECT * FROM PHOTOGRAPHER;");
while ($row = $sql->fetch_assoc()) 
                {
                    ?>
                    <br>
                    
                        <div class="container-fluid">

                            <div class="card mb-3" >
                    
                                <div class="row g-0">
    
                                    <div class="col-md-3" style="padding:1rem;">
      
                                      <img src="<?php echo $row['Pic'];?>" class="img-fluid rounded-start"  alt="Photographer" >

                                      <h5 class="card-title">Name : <?php echo $row['Name'];?></h5>
        
                                          <p class="card-text">City : <?php echo $row['City'];?></p>

                                          <p class="card-text">Photography Type : <?php echo $row['Type'];?></p>
        
                                          <p class="card-text" ><i class = "fa fa-rupee"></i> <?php echo $row['Price'];?>/Order</p>

                                          <a class = "btn btn-primary" href = "Payment.php">Select</a>
    
                                    </div>
    
                                    <div class="col-md-9">
      
                                      <div class="card-body">
        
                                        <img src = "<?php echo $row['Work1'];?>" alt="Work" style="height:18rem;width:18rem;" id = "work">

                                        <img src = "<?php echo $row['Work2'];?>" alt="Work" style="height:18rem;width:18rem;" id = "work">

                                        <img src = "<?php echo $row['Work3'];?>" alt="Work" style="height:18rem;width:18rem;" id = "work">

                                    </div>
    
                                    </div>
  
                                </div>

                            </div>
            
            <!-- <div class="col-sm-4" style="padding: 2%;">
                <div class="card text-center" >
                    
                    <div class="card-body" id = "profile">
                      <img src = "9.jpg" class="card-img-top" id = "image">

                      <h5 class="card-title">Name : </h5>
                      <p class="card-text">City : </p>
                      <p class="card-text" style="text-align: right;"><i class = "fa fa-rupee"></i> 35K/Order</p>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="#" class="btn btn-primary">View work</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4" style="padding: 2%;">
                <div class="card text-center">
                    
                    <div class="card-body" id = "profile">
                      <img src = "9.jpg" class="card-img-top" id = "image">

                      <h5 class="card-title">Name : </h5>
                      <p class="card-text">City : </p>
                      <p class="card-text" style="text-align: right;"><i class = "fa fa-rupee"></i> 35K/Order</p>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="#" class="btn btn-primary">View work</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-1"></div> -->

        
         <?php
                }
                ?>
        <!-- </div> -->
              <!-- </div> -->

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
              </div>
              </div>

</body>
</html>