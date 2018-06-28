<?php
$id = $_GET['id'];
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
       .more{

       }
       .more:hover{
        color: #ff477e; 
       }
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
      <!-- Header Area End -->
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
                                 <p>Sed fringilla et nibh. Ut varius tincidunt libero. Maecenas he nunc fringilla toma dermajhe kikeu tomra kakebolo na</p>
                                 <a href="#" class="lesun-btn">learn more</a>
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
                                 <p>Quisque ut nisi. Sed fringilla et nibh. Ut varius tincidunt libero. Maecenas he nunc fringilla toma dermajhe kikeu tomra kakebolo na amadero</p>
                                 <a href="#" class="lesun-btn">learn more</a>
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
       <!-- Services -->
       <section style="margin-bottom: 65px;margin-top: 65px;">
         <div>
           <div class="container-fluid">
             <div class="row">
               <div class="col-md-3 side-bar" style="    width: 22%;">
                 <div class="">
                  <div>
                    <h4 style="padding-top: 25px;"><i class="fa fa-home side-icon"></i><?php echo $id;?></h4>
                  </div>
                  <hr style="margin-top: 13px;margin-bottom: 11px;border: 0;border-top: 1px solid #0c90ce;">
                   <ul>
					<?php
					include 'data.php';
					$sql2="SELECT DISTINCT subcat FROM subcategory where cat='$id'";
					$query3 = mysqli_query($link, $sql2);
					while($rs2 = mysqli_fetch_array($query3))
						
					{
					$cat=$rs2['subcat'];
					echo '<li><a href="premiumadds.php?id=';
					echo $cat;
					echo '"><i class="fa fa-hand-o-right"></i>';
					echo $cat;
					echo'</a></li>';
					}
                     ?>
                   </ul>
                 </div>
               </div>
               
				<?php
					include 'data.php';
					$sql4="SELECT DISTINCT subcat FROM subcategory where cat='$id'";
					$query4 = mysqli_query($link, $sql4);
					while($rs3 = mysqli_fetch_array($query4))
					{	
						$cat1=$rs3['subcat'];
						echo '<div class="col-md-3 side-bar1"  style="    width: 22%;">';
						echo'<div>';
						echo '<h4>';
						echo $cat1;
						echo'</h4>';
						echo '<ul>';
						$sql5="SELECT name, email FROM storedetails where subcatagorie='$cat1'";
						$query5 = mysqli_query($link, $sql5);
						$count =mysqli_num_rows($query5);
						if($count >= 1)
						
						{	
							while($rs5 = mysqli_fetch_array($query5))
							{
							$email123=$rs5['email'];;
							$storename=$rs5['name'];
							echo '<li><a href="card.php?id=';
							echo $email123;
							echo '"><i class="fa fa-fighter-jet"></i>';
							echo $storename;
							echo'</a></li>';
							}

						}
						else
						{
							echo 'No vendors here';
						}
					echo '</div>';
						echo '</div>';
					}
							
                    ?>
                  </ul>
               </div>
               
             </div>
             </div>
          
       </section>
       <div>
         <a href="" class="more">More Details<i class="fa fa-angle-double-right" style="margin-left: 8px;"></i></a>
       </div>
       <!-- End Services -->
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
   </body>
</html>