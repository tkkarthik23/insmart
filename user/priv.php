<?php
include('essential.php');
?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->
      <title>Insmart</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Font awesome CSS -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- Animate CSS -->
      <link rel="stylesheet" href="css/animate.min.css">
      <!-- OwlCarousel CSS -->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <!-- SlickNav CSS -->
      <link rel="stylesheet" href="css/slicknav.min.css">
      <!-- Flaticon CSS -->
      <link rel="stylesheet" href="css/flaticon.css">
      <!-- Magnific popup CSS -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- Main CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
      <style>
       
      </style>
   </head>
   <body>
      <!-- Preloader Area Start -->
     <div id="preloader">
         <div id="status">
            <div class="spinner">
               <div class="double-bounce1"></div>
               <div class="double-bounce2"></div>
            </div>
            <p>Insmart</p>
         </div>
      </div> 
      <!-- Preloader Area Start -->
      <!-- Header Area Start -->
      <header class="lesun-header-area">
         <div class="lesun-main-header-area" style="background-color:#000;">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                    <div class="site-logo">
                        <a href="index.php">
                        <img src="images/insmartlogo.png" alt="site logo" />
                        </a>
                     </div>
                  </div>
                  <!-- Responsive Menu Start -->
                     <div class="lesun-responsive-menu"></div>
                     <!-- Responsive Menu Start -->

                  <div class="col-md-9">
                     <div class="mainmenu">
                      <nav>
                        <ul id="lesun_navigation">
                              <li class="current-page-item"><a href="../index.php"><i class="fa fa-home" style="margin-right:6px;"></i>Home</a>
                              </li>
                              <li><a href="ustore.php"><i class="fa fa-plus" style="margin-right:6px;"></i>Update Store Details</a></li>
                              <li><a href="priv.php"><i class="fa fa-plus" style="margin-right:6px;"></i>Privacy</a></li>
                              <li><a href="card.php"><i class="fa fa-plus" style="margin-right:6px;"></i>Store</a></li>
                              <li><a href="logout.php"><i class="fa fa-plus" style="margin-right:6px;"></i>Logout</a></li>
                        </ul>
                      </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area End -->
      
<div>
        <div class="container">
    <div class="row"  style="background-color: #f1f1f1;">
       
      <div class="col-md-2">
        
      </div>
      <div class="col-md-8">
        <div class="reg-frm">
        <div class="frm-titles">
          <h3 style="text-align: center;">User Details</h3>
        </div>

  <form role="form" class="form-horizontal" action="updtpwd.php" method="post" enctype="multipart/form-data" name="form" id="form" onsubmit="return validateForm()">

    <div class="form-group" style="padding-top: 15px;">
      <div class="col-sm-8" style="padding-right: 80px;">
       <?php
        if(isset($_GET['user']))
        {
      echo '<div class="col-sm-12 col-xs-12">';
      echo '<div style="border: 1px #ff0000 solid;padding: 3px;text-align: center;margin-left: 63px;margin-right: 63px;color:#ff0000;">';
        
          echo "<h3>Error On Old Password</h3>";
        
      
      echo '</div>';
      echo '</div>';}
      ?>
      </div>
    </div>

    <div class="form-group" style="padding-top: 15px;">
      <label class="control-label col-sm-4" for="title">E-Mail</label>
      <div class="col-sm-8" style="padding-right: 80px;">
        <input type="text" class="form-control" id="title" placeholder="<?php echo $email; ?>" name="name" disabled>
      </div>
    </div>
	<div class="form-group" >
      <label class="control-label col-sm-4" for="title">Phone</label>
      <div class="col-sm-8" style="padding-right: 80px;">
        <input type="text" class="form-control" id="title" placeholder="<?php echo $phone; ?>" name="name" disabled>
      </div>
    </div>
	<div class="form-group" >
      <label class="control-label col-sm-4" for="title">Name</label>
      <div class="col-sm-8" style="padding-right: 80px;">
        <input type="text" class="form-control" id="title" placeholder="<?php echo $name; ?>" name="name" disabled>
      </div>
    </div>
	<div class="form-group" >
      <label class="control-label col-sm-4" for="epassword">Existing Password</label>
      <div class="col-sm-8" style="padding-right: 80px;">
        <input type="password" class="form-control"  placeholder="Existing Password"  name="password" id="password">
        <span style="color:red" id="demo1"></span>
      </div>
    </div>
	<div class="form-group" >
      <label class="control-label col-sm-4" for="npassword">New Password</label>
      <div class="col-sm-8" style="padding-right: 80px;">
        <input type="password" class="form-control"  placeholder="New passord" title="Must contain at least one number and one uppercase and lowercase letter and special character, and at least 8 or more characters" name="npassword" id="npassword">
        <span style="color:red" id="demo2"></span>
      </div>
    </div>
		<div class="form-group" >
      <label class="control-label col-sm-4" for="rpassword">Re Enter Password</label>
      <div class="col-sm-8" style="padding-right: 80px;">
        <input type="password" class="form-control"  placeholder="Re Enter Password"  name="cnpassword" id="cnpassword">
        <span style="color:red" id="demo3"  ></span>
      </div>
    </div>
<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="newsubmit">Submit</button>
      </div>
    </div>
  </form>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</div>    
<script type="text/javascript">
function validateForm(){
var a = document.getElementById('password').value;

    if(a == "") 
    { 
        document.getElementById("demo1").innerHTML= 'Enter the Existing Password';
        return false;
    }
  var mediumRegex = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
     var b = document.getElementById('npassword').value;
    if ( b== "") 
    {
         document.getElementById("demo1").innerHTML= '';
        document.getElementById("demo2").innerHTML= 'Must contain at least one [0-9],[A-Z],[a-z] and a special character and atleast 8 characters';
        return false;
    }
    else if(!mediumRegex.test(b))
    {
    document.getElementById("demo2").innerHTML = "Must contain at least one [0-9],[A-Z],[a-z] and a special character and atleast 8 characters";
        return false;
    }

var c = document.getElementById('cnpassword').value;
    if ( c== "") 
    {
         document.getElementById("demo2").innerHTML= '';
        document.getElementById("demo3").innerHTML= 'Enter the confirm passsword';
        return false;
    }
    else if(document.getElementById('npassword').value !=
            document.getElementById('cnpassword').value)
    {
        document.getElementById("demo3").innerHTML = "Re-enter the above passsword";
        return false;
    }
  }
  </script>





       
      <!-- Footer Area Start -->
       <footer class="lesun-footer-area">
         <div class="footer-top-area section_50">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-2 col-sm-2 col-xs-12">
                     <div class="single-footer-widget footer-logo-widget">
                        <div class="footer-logo">
                           <a href="index.php">
                           <img src="images/insmartlogo.png" alt="footer logo" />
                           </a>
                        </div>
                        <div class="footer-widget-text">
                           <p>In Smart is a live hosting data upgration mobile application for advertising andmarketing or services. </p>
                           <p> We furnish you with interact and genuine information about your city with images and collection of data.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                     <div class="single-footer-widget">
                        <h3>main links</h3>
                        <ul>
                           <li><a href="../homeandconstructions.php?id=Home and Constructions"><i class="fa fa-angle-double-right "></i>Home and Constructions</a></li>
                           <li><a href="../homeandconstructions.php?id=fashion and Jewellery"><i class="fa fa-angle-double-right "></i> Fashion and Jewellery</a></li>
                           <li><a href="../homeandconstructions.php?id=Education"><i class="fa fa-angle-double-right "></i>Education</a></li>
                           <li><a href="../homeandconstructions.php?id=Food and Restaurants"><i class="fa fa-angle-double-right "></i>Food and Restaurant</a></li>
                           <li><a href="../homeandconstructions.php?id=Health and Medical"><i class="fa fa-angle-double-right "></i> Health and Medical</a></li>
                           <li><a href="../homeandconstructions.php?id=Beauty and Fitness"><i class="fa fa-angle-double-right "></i> Beauty and Fitness</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                     <div class="single-footer-widget">
                        <h3>main links</h3>
                        <ul>
                           <li><a href="../homeandconstructions.php?id=Vehicle Showrooms"><i class="fa fa-angle-double-right "></i> Vehicle Showrooms</a></li>
                           <li><a href="../homeandconstructions.php?id=Lubricant Engine Oil"><i class="fa fa-angle-double-right "></i> Lubricant Engine Oil</a></li>
                           <li><a href="../homeandconstructions.php?id=Shops"><i class="fa fa-angle-double-right "></i>Shops</a></li>
                           <li><a href="../homeandconstructions.php?id=General Stores"><i class="fa fa-angle-double-right "></i> General Stores</a></li>
                           <li><a href="../homeandconstructions.php?id=Function and Wedding"><i class="fa fa-angle-double-right "></i>Function and Wedding</a></li>
                           <li><a href="../homeandconstructions.php?id=Art and Culture"><i class="fa fa-angle-double-right "></i> Art and Culture</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                     <div class="single-footer-widget">
                        <h3>main links</h3>
                        <ul>
                           <li><a href="../homeandconstructions.php?id=People and Services"><i class="fa fa-angle-double-right "></i> People and Services</a></li>
                           <li><a href="../homeandconstructions.php?id=Travels and Transport"><i class="fa fa-angle-double-right "></i>Travels and Trans port</a></li>
                           <li><a href="../homeandconstructions.php?id=Car Accessories"><i class="fa fa-angle-double-right "></i>Car Accessories</a></li>
                           <li><a href="../homeandconstructions.php?id=Distributors and Suppliers"><i class="fa fa-angle-double-right "></i> Distributors and Suppliers</a></li>
                           <li><a href="../homeandconstructions.php?id=Market"><i class="fa fa-angle-double-right "></i> Market</a></li>
                           <li><a href="../homeandconstructions.php?id=Aqua Culture"><i class="fa fa-angle-double-right "></i> Aqua Culture</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                     <div class="single-footer-widget">
                        <h3>main links</h3>
                        <ul>
                           <li><a href="../homeandconstructions.php?id=Pet Center"><i class="fa fa-angle-double-right "></i> Pet Center</a></li>
                           <li><a href="../homeandconstructions.php?id=Professionals"><i class="fa fa-angle-double-right "></i>Professionals</a></li>
                           <li><a href="../homeandconstructions.php?id=Entertainment and Fun"><i class="fa fa-angle-double-right "></i>Entertainment and Fun</a></li>
                           <li><a href="../homeandconstructions.php?id=Insurance and Banks"><i class="fa fa-angle-double-right "></i> Insurance and banks</a></li>
                           <li><a href="../homeandconstructions.php?id=Astrology and Vastu"><i class="fa fa-angle-double-right "></i> Astrology and Vastu</a></li>
                           <li><a href="../homeandconstructions.php?id=Real Estate"><i class="fa fa-angle-double-right "></i> Real Estate</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                     <div class="single-footer-widget">
                        <h3>Contact Info</h3>
                        <p><i class="fa fa-map-marker"></i> 4257 Street, SunnyVale </p>
                        <p><i class="fa fa-phone"></i> 012-3456-789</p>
                        <p><i class="fa fa-envelope-o"></i> info@insmart.com</p>
                        <p><i class="fa fa-envelope-o"></i> info@insmart.com</p>
                        <p><i class="fa fa-fax"></i> 112-3456-7898</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="copyright-right">
                        <p>&copy; Copyright <a href="#">Insmart</a> 2018. All rights reserved</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
       
       
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Modernizr JS -->
      <script src="js/modernizr.custom.97074.js"></script>
      <!-- Magnific Popup JS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- OwlCarousel JS -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- SlickNav JS -->
      <script src="js/jquery.slicknav.min.js"></script>
      <!-- Counter JS -->
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Way Points JS -->
      <script src="js/waypoints-min.js"></script>
      <!-- Hoverdir JS -->
      <script src="js/jquery.hoverdir.js"></script>
      <!-- Custom JS -->
      <script src="js/custom.js"></script>
   </body>
</html>

