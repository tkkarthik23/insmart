<!DOCTYPE html>
<?php
        
        if(isset($_GET['emailfun']))
        {
          echo "<script>
          alert('Mail sent successfully');
          </script>";
        }
		
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
                     <!-- Responsive Menu Start -->
                     <div class="lesun-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                  </div>
                  <div class="col-md-9">
                     <div class="mainmenu">
                        <nav>
                           <ul id="lesun_navigation">
                              <li class="current-page-item"><a href="index.php"><i class="fa fa-home" style="margin-right:6px;"></i>Home</a>
                              </li>
                              <?php
              session_start();
              require('data.php');
                if(isset($_SESSION['sesid']))
                {
                  $ui=$_SESSION['sesid'];
                  $sql="SELECT name FROM session WHERE sesid='$ui'";
                  $query1 = mysqli_query($link, $sql);
                  while($rs = mysqli_fetch_array($query1))
                    {
                      $name=$rs['name'];
                      echo'<li>
                                 <a href="user/index.php"><i class="fa fa-user" style="margin-right:6px;"></i>';echo '   ';echo $name;echo'</a></li>';
                    }
                    
                } 
                else
                {
                echo'<li><a href="log.php"><i class="fa fa-plus" style="margin-right:6px;"></i>Publish your Details</a></li>
                              <li>
                                 <a href="registration.php"><i class="fa fa-user" style="margin-right:6px;"></i>Registration 
                                 </a>
                              </li>
                              <li>
                                 <a href="log.php"><i class="fa fa-sign-in" style="margin-right:6px;"></i>Login
                                 </a>
                              </li>';
                }?>
                              
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        
      </header>
      <!-- Header Area End -->
      <!-- Search -->
      <div style="margin-top: 20px;margin-bottom: 20px;">
        <div class="container-fluid">
          <form method="GET" action='res.php' z>
              <div class="row">
                <div class="col-md-1">
                  
                </div>
                <div class="col-md-2">
                  <select id="categorydd" onChange="change_category()" class="form-control selectform selcls" name="cat" required><option value="" selected disabled hidden>Select Category</option>
                           <?php
              require('data.php');
              $res=mysqli_query($link,"select * from category");
              while($row=mysqli_fetch_array($res))
              {
              ?>
              <option value="<?php echo $row["catname"];?>"><?php echo $row["catname"];?></option>
              <?php 
              }
              ?>
               </select>
                </div>
                <div class="col-md-2">
                  <select class="form-control selectform selcls" name ="subcat"  id="state" required><option value="" selected disabled hidden>Select Category</option>
                           </select>
                </div>
                <div class="col-md-2">
                  <select class="form-control selectform selcls" id="categoryww" onChange="change_categoryww()" name ="state" required><option>Select State</option>
               <?php
              $res=mysqli_query($link,"select * from state");
              while($row=mysqli_fetch_array($res))
              {
              ?>
              <option value="<?php echo $row["state"];?>"><?php echo $row["state"];?></option>
              <?php 
              }
              ?>
                           </select>
                </div>
                <div class="col-md-2">
                  <select class="form-control selectform selcls" id="place" name ="city" required><option value="" selected disabled hidden>Select city</option>
                           </select>
                </div>
                <div class="col-md-2">
                   <input type="submit" name="search" class="newsubmit" value="Search"/> 
                </div>
                <div class="col-md-1">
                  
                </div>
              </div>
          </form> 
        </div>
      </div>
      <!-- End Search -->
        <!-- Slider -->
        <section class="lesun-slider-area">
         <div class="lesun-slide">
            <div class="lesun-main-slide slide-item-2">
               <div class="lesun-main-caption">
                  <div class="lesun-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <h2>get help from our experts</h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="lesun-main-slide slide-item-3">
               <div class="lesun-main-caption">
                  <div class="lesun-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <h2>Grow Your Business</h2>
                          </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
        <!-- End Slider -->


        
        <!-- Service Area Start -->
      <section class="lesun-service-area section_t_100 section_b_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="lesun-site-heading">
                     <h4>our services</h4>
                     <h2>We Specialize in</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                        <div class="service-img">
                          <a href="homeandconstructions.php?id=Home and Constructions"> <img src="images/homes.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
					 <a href="homeandconstructions.php?id=Home and Constructions">
                              <h3>Home & Constructions</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                        <div class="service-img">
                          <a href="homeandconstructions.php?id=fashion and Jewellery"> <img src="images/diamond.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=fashion and Jewellery">
                              <h3>Fashion & Jewellery</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                            <a href="homeandconstructions.php?id=Education"><img src="images/students-cap.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Education">
                              <h3>Education</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                        <div class="service-img">
							<a href="homeandconstructions.php?id=Food and Restaurants"><img src="images/restaurant.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Food and Restaurants">
                              <h3>Food & Restaurants</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                           <a href="homeandconstructions.php?id=Health and Medical"><img src="images/stethoscope.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Health and Medical">
                              <h3>Health & Medical</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                           <a href="homeandconstructions.php?id=Beauty and Fitness"><img src="images/woman.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Beauty and Fitness">
                              <h3>Beauty & Fitness</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                          <a href="homeandconstructions.php?id=Vehicle Showrooms"> <img src="images/motorcycle.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Vehicle Showrooms">
                              <h3>Vehicle Showrooms</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                           <a href="homeandconstructions.php?id=Lubricant Engine Oil"><img src="images/fuel.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Lubricant Engine Oil">
                              <h3>Lubricant Engine Oil</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                          <a href="homeandconstructions.php?id=Shops"> <img src="images/shopping-bag.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Shops">
                              <h3>Shops</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                            <a href="homeandconstructions.php?id=General Stores"><img src="images/shop.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=General Stores">
                              <h3>General Stores</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                          <a href="homeandconstructions.php?id=Function and Weddings"> <img src="images/wedding-couple.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Function and Weddings">
                              <h3>Function & Weddings</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                           <a href="homeandconstructions.php?id=Art and Culture"> <img src="images/paint-palette.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Art and Culture">
                              <h3>Art & Culture</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                           <a href="homeandconstructions.php?id=People and Services"><img src="images/gear.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=People and Services">
                              <h3>People & Services</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                        <div class="service-img">
                            <a href="homeandconstructions.php?id=Travels and Transport"> <img src="images/bus.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Travels and Transport">
                              <h3>Travels & Transport</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                            <a href="homeandconstructions.php?id=Car Accessories"> <img src="images/car.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Car Accessories">
                              <h3>Car Accessories</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                        <div class="service-img">
                           <a href="homeandconstructions.php?id=Distributors and Suppliers"> <img src="images/hotel.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Distributors and Suppliers">
                              <h3>Distributors & Suppliers</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                          <a href="homeandconstructions.php?id=Market"> <img src="images/fair-stand.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Market">
                              <h3>Market</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                        <div class="service-img">
                         <a href="homeandconstructions.php?id=Aqua Culture">  <img src="images/aqua-park.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Aqua Culture">
                              <h3>Aqua Culture</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                        <div class="service-img">
                           <a href="homeandconstructions.php?id=Pet Center"> <img src="images/dog.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Pet Center">
                              <h3>Pet Center</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                           <a href="homeandconstructions.php?id=professional"> <img src="images/professional.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=professional">
                              <h3>Professionals</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                           <a href="homeandconstructions.php?id=Entertainment and Fun"> <img src="images/musical-note.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Entertainment and Fun">
                              <h3>Entertainment & Fun</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                           <a href="homeandconstructions.php?id=Insurance and Banks"> <img src="images/mortgage.png" class="serviceimages"></a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Insurance and Banks">
                              <h3>Insurance & Banks</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                           <a href="homeandconstructions.php?id=Astrology and Vastu"> <img src="images/tarot.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Astrology and Vastu">
                              <h3>Astrology & Vastu</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
                <div class="col-md-2">
                  <div class="single-service-item">
                     <div class="service-heading-icon">
                         <div class="service-img">
                          <a href="homeandconstructions.php?id=Real and Estate"> <img src="images/building.png" class="serviceimages"> </a>
                        </div>
                     </div>
                     <div class="service-heading">
                           <a href="homeandconstructions.php?id=Real and Estate">
                              <h3>Real Estate</h3>
                           </a>
                        </div>
                     <div class="service-hover">
                        <div class="service-hob-one"></div>
                        <div class="service-hob-two"></div>
                        <div class="service-hob-three"></div>
                        <div class="service-hob-four"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Service Area End -->
       
       
      <!-- Choose Us Area Start -->
      <section class="lesun-choose-us-area section_100">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="choose-us-wrap">
                     <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="choose-wrap-heading">
                              <h2>why you should choose us</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                           <div class="single-choose-left">
                              <div class="choose-icon">
                                 <i class="fa fa-users"></i>
                              </div>
                              <div class="choose-info">
                                 <h4>Awesome Stuff</h4>
                                 <p>ipsum dolor sit amet</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                           <div class="single-choose-right">
                              <div class="choose-icon">
                                 <i class="fa fa-cogs"></i>
                              </div>
                              <div class="choose-info">
                                 <h4>creative process</h4>
                                 <p>ipsum dolor sit amet</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                           <div class="single-choose-left">
                              <div class="choose-icon">
                                 <i class="fa fa-clock-o"></i>
                              </div>
                              <div class="choose-info">
                                 <h4>good planning</h4>
                                 <p>ipsum dolor sit amet</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                           <div class="single-choose-right">
                              <div class="choose-icon">
                                 <i class="fa fa-thumbs-up"></i>
                              </div>
                              <div class="choose-info">
                                 <h4>24/7 support</h4>
                                 <p>ipsum dolor sit amet</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Us Area End -->
       
       
      <!-- Project Area Start -->
      <section class="lesun-project-area section_t_100 section_b_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12 col-sm-12">
                  <div class="lesun-site-heading">
                     <h4>our works</h4>
                     <h2>what we did</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="protfolio_content">
                  <div id="da-thumbs" class="da-thumbs">
                     <div class="project_row">
                        <div class="col-md-3 single_portfolio col-sm-6">
                           <div class="project_list">
                              <a href="#" class="gallery-lightbox">
                                <i class="fa fa-th prj-icon"></i>
                                <p class="prj-nmber">406</p>
                                <p class="prj-title">No. of Total Ads</p>
                                 <div class="project-overlay">
                                    <div class="project-overlay-inner">
                                       <h3>Total Adds</h3>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                       <div class="col-md-3 single_portfolio col-sm-6">
                           <div class="project_list">
                              <a href="#" class="gallery-lightbox">
                                 <i class="fa fa-star prj-icon"></i>
                                <p class="prj-nmber">139</p>
                                <p class="prj-title">Premium Adds</p>
                                 <div class="project-overlay">
                                    <div class="project-overlay-inner">
                                       <h3>Premium Adds</h3>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                       <div class="col-md-3 single_portfolio col-sm-6">
                           <div class="project_list">
                              <a href="#" class="gallery-lightbox">
                                <i class="fa fa-star fa fa-star prj-icon"></i>
                                <p class="prj-nmber">84</p>
                                <p class="prj-title">Premium Adds 2</p>
                                 <div class="project-overlay">
                                    <div class="project-overlay-inner">
                                       <h3>Premium Adds 2</h3>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-3 single_portfolio col-sm-6">
                           <div class="project_list">
                              <a href="#" class="gallery-lightbox">
                                <i class="fa fa-tags prj-icon"></i>
                                <p class="prj-nmber">33</p>
                                <p class="prj-title">Premium Adds 3</p>
                                 <div class="project-overlay">
                                    <div class="project-overlay-inner">
                                       <h3>Premium Adds 3</h3>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="project_row">
                        <div class="col-md-3 single_portfolio col-sm-6">
                           <div class="project_list">
                              <a href="#" class="gallery-lightbox">
                                <i class="fa fa-th prj-icon"></i>
                                <p class="prj-nmber">22</p>
                                <p class="prj-title">No. of Categorie's</p>
                                 <div class="project-overlay">
                                    <div class="project-overlay-inner">
                                       <h3>No. of Categorie's</h3>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                       <div class="col-md-3 single_portfolio col-sm-6">
                           <div class="project_list">
                              <a href="#" class="gallery-lightbox">
                                 <i class="fa fa-star prj-icon"></i>
                                <p class="prj-nmber">1</p>
                                <p class="prj-title">No. of Region's</p>
                                 <div class="project-overlay">
                                    <div class="project-overlay-inner">
                                       <h3>No. of Region's</h3>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                       <div class="col-md-3 single_portfolio col-sm-6">
                           <div class="project_list">
                              <a href="#" class="gallery-lightbox">
                                <i class="fa fa-star fa fa-star prj-icon"></i>
                                <p class="prj-nmber">4</p>
                                <p class="prj-title">No. of Citie's</p>
                                 <div class="project-overlay">
                                    <div class="project-overlay-inner">
                                       <h3>No. of Citie's</h3>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-3 single_portfolio col-sm-6">
                           <div class="project_list">
                              <a href="#" class="gallery-lightbox">
                                <i class="fa fa-tags prj-icon"></i>
                                <p class="prj-nmber">406</p>
                                <p class="prj-title">Total Members</p>
                                 <div class="project-overlay">
                                    <div class="project-overlay-inner">
                                       <h3>Total Members</h3>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Project Area End -->
      
 <!-- Google Store -->
       <section class="lesun-quote-area section_100">
         <div>
           <div class="container">
             <div class="row">
               <div class="col-md-12">
                 <h3 style="text-align: center;color: #ffffff;margin-bottom: 30px;">Get the Apps</h3>
               </div>
             </div>
             <div class="row">
               <div class="col-md-2">
                 
               </div>
               <div class="col-md-4 col-lg-4">
                 <a href="">
                   <img src="images/googleplay.png" width="298px" height="72px">
                 </a>
               </div>
               <div class="col-md-4 col-lg-4">
                 <a href="">
                   <img src="images/app.png" width="298px" height="72px">
                 </a>
               </div>
               <div class="col-md-2">
                 
               </div>
             </div>
           </div>
         </div>
       </section>
       <!-- End Google Store -->
       
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
                           <li><a href="homeandconstructions.php?id=Home and Constructions"><i class="fa fa-angle-double-right "></i>Home and Constructions</a></li>
                           <li><a href="homeandconstructions.php?id=fashion and Jewellery"><i class="fa fa-angle-double-right "></i> Fashion and Jewellery</a></li>
                           <li><a href="homeandconstructions.php?id=Education"><i class="fa fa-angle-double-right "></i>Education</a></li>
                           <li><a href="homeandconstructions.php?id=Food and Restaurants"><i class="fa fa-angle-double-right "></i>Food and Restaurant</a></li>
                           <li><a href="homeandconstructions.php?id=Health and Medical"><i class="fa fa-angle-double-right "></i> Health and Medical</a></li>
                           <li><a href="homeandconstructions.php?id=Beauty and Fitness"><i class="fa fa-angle-double-right "></i> Beauty and Fitness</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                     <div class="single-footer-widget">
                        <h3>main links</h3>
                        <ul>
                           <li><a href="homeandconstructions.php?id=Vehicle Showrooms"><i class="fa fa-angle-double-right "></i> Vehicle Showrooms</a></li>
                           <li><a href="homeandconstructions.php?id=Lubricant Engine Oil"><i class="fa fa-angle-double-right "></i> Lubricant Engine Oil</a></li>
                           <li><a href="homeandconstructions.php?id=Shops"><i class="fa fa-angle-double-right "></i>Shops</a></li>
                           <li><a href="homeandconstructions.php?id=General Stores"><i class="fa fa-angle-double-right "></i> General Stores</a></li>
                           <li><a href="homeandconstructions.php?id=Function and Wedding"><i class="fa fa-angle-double-right "></i>Function and Wedding</a></li>
                           <li><a href="homeandconstructions.php?id=Art and Culture"><i class="fa fa-angle-double-right "></i> Art and Culture</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                     <div class="single-footer-widget">
                        <h3>main links</h3>
                        <ul>
                           <li><a href="homeandconstructions.php?id=People and Services"><i class="fa fa-angle-double-right "></i> People and Services</a></li>
                           <li><a href="homeandconstructions.php?id=Travels and Transport"><i class="fa fa-angle-double-right "></i>Travels and Trans port</a></li>
                           <li><a href="homeandconstructions.php?id=Car Accessories"><i class="fa fa-angle-double-right "></i>Car Accessories</a></li>
                           <li><a href="homeandconstructions.php?id=Distributors and Suppliers"><i class="fa fa-angle-double-right "></i> Distributors and Suppliers</a></li>
                           <li><a href="homeandconstructions.php?id=Market"><i class="fa fa-angle-double-right "></i> Market</a></li>
                           <li><a href="homeandconstructions.php?id=Aqua Culture"><i class="fa fa-angle-double-right "></i> Aqua Culture</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                     <div class="single-footer-widget">
                        <h3>main links</h3>
                        <ul>
                           <li><a href="homeandconstructions.php?id=Pet Center"><i class="fa fa-angle-double-right "></i> Pet Center</a></li>
                           <li><a href="homeandconstructions.php?id=Professionals"><i class="fa fa-angle-double-right "></i>Professionals</a></li>
                           <li><a href="homeandconstructions.php?id=Entertainment and Fun"><i class="fa fa-angle-double-right "></i>Entertainment and Fun</a></li>
                           <li><a href="homeandconstructions.php?id=Insurance and Banks"><i class="fa fa-angle-double-right "></i> Insurance and banks</a></li>
                           <li><a href="homeandconstructions.php?id=Astrology and Vastu"><i class="fa fa-angle-double-right "></i> Astrology and Vastu</a></li>
                           <li><a href="homeandconstructions.php?id=Real Estate"><i class="fa fa-angle-double-right "></i> Real Estate</a></li>
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
       <script type="text/javascript">
  function change_category()
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","ajax.php?category="+document.getElementById("categorydd").value,false);
    xmlhttp.send(null);
    document.getElementById("state").innerHTML=xmlhttp.responseText;

  }
</script>
<script type="text/javascript">
  function change_categoryww()
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","ajax1.php?state="+document.getElementById("categoryww").value,false);
    xmlhttp.send(null);
    document.getElementById("place").innerHTML=xmlhttp.responseText;
  }
</script>

       
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
	  <script type="text/javascript">
	function change_category()
	{
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","ajax.php?category="+document.getElementById("categorydd").value,false);
		xmlhttp.send(null);
		document.getElementById("state").innerHTML=xmlhttp.responseText;

	}
</script>
<script type="text/javascript">
	function change_categoryww()
	{
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","ajax1.php?state="+document.getElementById("categoryww").value,false);
		xmlhttp.send(null);
		document.getElementById("place").innerHTML=xmlhttp.responseText;
	}
</script>

   </body>
</html>

