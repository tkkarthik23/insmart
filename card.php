<?php
if(isset($_GET['id']))
{
require('data.php');
$id = $_GET['id'];
$email=$id;
}
else
{
  header('location:index.php');
}

$sql1="SELECT email FROM storedetails WHERE email='$id'";
$result = mysqli_query($link,$sql1) or die(mysql_error());
$count =mysqli_num_rows($result);
if($count == 1)
{
  $sql1="SELECT `name`, `owner`, `phone`, `city`, `state`, `catagorie`, `subcatagorie`, `image`, `address`, `services`, `fb`, `twitter` FROM `storedetails` WHERE email='$email'";
  $query2 = mysqli_query($link, $sql1);
  while($rs1 = mysqli_fetch_array($query2))
  {
    $storename=$rs1['name'];
    $phone=$rs1['phone'];
    $owner=$rs1['owner'];
    $city=$rs1['city'];
    $state=$rs1['state'];
    $catagorie=$rs1['catagorie'];
    $subcatagorie=$rs1['subcatagorie'];
    $address=$rs1['address'];
    $services=$rs1['services'];
    $fb=$rs1['fb'];
    $twitter=$rs1['twitter'];
    $image=$rs1['image'];
  }
}
else
{
    header('location:log.php?user123=user123');
}
?>
<!DOCTYPE html>
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
      <style type="text/css">

.agent {
  background:white;
  position:relative;
  margin-bottom:30px;
}

        .agent-single { margin-bottom:50px; }
.agent-single .agent-img { margin:1%; width:30%; float:left; }
.agent-single .agent-img .hex {
  position:absolute;
  right:-37px;
  top:20px;
  -ms-transform: rotate(90deg); /* IE 9 */
    -webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
    transform: rotate(90deg);
    height:50px;
}
.agent-single .agent-content { position:relative; z-index:10; padding:30px; width:90%; float:left; }
.agent-single .center { text-align:left; }

.agent-single .agent-details { border-bottom:none; margin-bottom:10px; }
.agent-single .agent-details p {
  border-bottom:1px solid rgba(0, 0, 0, 0.1);
  padding-top:4px;
  padding-bottom:4px;
  font-weight: bold;
}
.agent-single .agent-details p span { float:right; font-weight:600;color: #0c90ce; }

.agent-single .agent-form { 
  width:30%; 
  float:right;
  background:#59aee9;
  color:white;
  padding:57px 30px;
  margin-top:-20px;
  margin-bottom:-20px;
  box-shadow:-10px 0px 20px rgba(0, 0, 0, 0.1);
}
.agent-single .agent-form h4 { margin-bottom:20px; color:white; }
.agent-single .agent-form textarea { height:100px; }
.agent-single .agent-form input[type="submit"] { background:#323746; margin-bottom:0px; }

.agent-properties .property .property-content { border-right:1px solid rgba(0, 0, 0, 0.06); border-left:1px solid rgba(0, 0, 0, 0.06); }
.module { position:relative; padding:70px 0px 70px 0px; }
.social-icons { margin-bottom:0; }
.social-icons li { display:inline-block; padding-left:5px; padding-right:5px; line-height:1.4; }
.social-icons li:last-child { padding-right:0px; }
.social-icons.circle li a {
  font-size:14px;
  border:1px solid #48a0dc;
  width:28px;
  height:28px;
  display:inline-block;
  text-align:center;
  padding-top:4px;
  border-radius:100%;
}
.social-icons.circle li a:hover { background:#48a0dc; border-color:#48a0dc; color:white; }
.user-img{
  height: 300px;
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
                        <img src="images/insmartlogo.png" alt="site logo" style="margin-top: 5px;height:40px;width:320px;" />
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

                              <li>
                              <?php
              
              require('data.php');
                if(isset($_SESSION['sesid']))
                {
                  $ui=$_SESSION['sesid'];
                  $sql="SELECT name FROM session WHERE sesid='$ui'";
                  $query1 = mysqli_query($link, $sql);
                  while($rs = mysqli_fetch_array($query1))
                    {
                      $name=$rs['name'];
                      echo'<li><a href="user/"><i class="fa fa-plus" style="margin-right:6px;"></i>Publish your Details</a></li>';
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
      <section style="margin-bottom: 40px;margin-top: 40px;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="container1">
                 <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="Notebook" style="width:100%;height:492px !important;">'; ?>
                  <div class="content">
                    <div class="conttent2">
                       <h3 class="profile-head"><?php echo $storename; ?></h3>
                        <p><i class="fa fa-envelope-o" style="margin-right: 8px;"></i><?php echo $email; ?></p>
                        <p><i class="fa fa-phone" style="margin-right: 8px;"></i><?php echo $phone; ?></p>
                        <p><i class="fa fa-cog" style="margin-right: 8px;"></i><?php echo $subcatagorie; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
  <section style="margin-top: 10px;margin-b<ottom: 10px;">
       <div>
         <div class="container">
           <div class="row">
             <div class="col-md-6" style="border:#ddd 2px solid">
                <div class="agent agent-single">
                    <div class="agent-content">
                          <div class="agent-details">
                            <h3 style="margin-bottom: 15px;"><a href="#" >Store Details</a></h3>
                            <p><i class="fa fa-tag icon" style="margin: 5px;padding-right: 3px;"></i>Categories: <span><?php echo $catagorie; ?></span></p>
                            <p><i class="fa fa-envelope icon" style="margin: 5px;padding-right: 3px;"></i>Sub Categories: <span><?php echo $subcatagorie; ?></span></p>
                            <p><i class="fa fa-phone icon" style="margin: 5px;padding-right: 3px;"></i>State: <span><?php echo $state; ?></span></p>
                            <p><i class="fa fa-mobile icon" style="margin: 5px;padding-right: 3px;"></i>City: <span><?php echo $city; ?></span></p>
                            <p><i class="fa fa-skype icon" style="margin: 5px;padding-right: 3px;"></i>Address: <span><?php echo $address; ?></span></p>
                          </div>
                          <div class="center">
                            <ul class="social-icons circle">
                            <li><a href="<?php echo $fb; ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                          </div><br/>
     <div> 
                             <div class="button alt button-icon" style="display: inline-block;margin-left: 10px;">
                              <a href="ustore.php" data-toggle="modal" data-target="#myModal"><input type="submit" name="search" class="newsubmit" value="Send us a mail"/> </a>
                            </div>
                          </div>
                    </div>
                </div>
             </div>
            <div class="col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
           </div>
         </div>
       </div>
  </section>
      <!-- Model for Quirees -->
       <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Quires</h4>
        </div>
        <div class="modal-body">
          <div class="container">
           <form action="sendmail.php" method="POST">
             <!-- <div class="row" style="margin-bottom: 8px;">
               <div class="form-group log-res">
                <label class="control-label col-sm-2 col-xs-12" for="phone">To<span class="error"> *</span></label>
                <div class="col-sm-4 col-xs-12" style="padding-right: 80px;">
                  <input  type="Text" class="form-control" id="password1" placeholder="some@gmail.com" name="password" required  readonly="" />
                </div>
              </div>
             </div> -->
             <div class="row" style="margin-bottom: 8px;">
               <div class="form-group log-res">
                <label class="control-label col-sm-2 col-xs-12" for="phone">Name<span class="error"> *</span></label>
                <div class="col-sm-4 col-xs-12" style="padding-right: 80px;">
                  <input  type="Text" class="form-control" id="password1" placeholder="Name" name="name" required  />
                </div>
              </div>
             </div>
             <div class="row" style="margin-bottom: 8px;">
               <div class="form-group log-res">
                <label class="control-label col-sm-2 col-xs-12" for="email">Email<span class="error"> *</span></label>
                <div class="col-sm-4 col-xs-12" style="padding-right: 80px;">
                  <input  type="Email" class="form-control" id="password1" placeholder="email" name="email" required  />
                </div>
              </div>
             </div>
             <div class="row" style="margin-bottom: 8px;">
               <div class="form-group log-res">
                <label class="control-label col-sm-2 col-xs-12" for="phone">Phone Number<span class="error"> *</span></label>
                <div class="col-sm-4 col-xs-12" style="padding-right: 80px;">
                  <input  type="text" class="form-control" id="password1" placeholder="Phone" name="mobile" required   />
                </div>
              </div>
             </div>
             <div class="row" style="margin-bottom: 8px;">
               <div class="form-group log-res">
                <label class="control-label col-sm-2 col-xs-12" for="query">Write Query<span class="error"> *</span></label>
                <div class="col-sm-4 col-xs-12" style="padding-right: 80px;">
                  <textarea type="text" class="form-control" id="address" name="message" placeholder="Write your Query" rows="5" ></textarea>
                </div>
              </div>
             </div>
             <div class="row">
             <div class="form-group log-res">        
              <div class="col-sm-offset-2 col-sm-4">
                
                <button type="submit" value="<?php echo $id; ?>" class="newsubmit" name="submit">Submit</button>
               
              </div>
            </div>
            </div>
           </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
     </div>
     </div> 
      <!-- End Model For Quirees -->
      <!-- Model for Comments -->
       <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Write a Comment</h4>
        </div>
        <div class="modal-body">
          <div class="container">
           <form>
             <div class="row" style="margin-bottom: 8px;">
               <div class="form-group log-res">
                <label class="control-label col-sm-2 col-xs-12" for="phone">Write Comment<span class="error"> *</span></label>
                <div class="col-sm-4 col-xs-12" style="padding-right: 80px;">
                  <textarea type="text" class="form-control" id="address" name="address" placeholder="Write your Quirees" rows="5" ></textarea>
                </div>
              </div>
             </div>
             <div class="row">
             <div class="form-group log-res">        
              <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="newsubmit" name="submit">Submit</button>
              </div>
            </div>
            </div>
           </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
     </div>
     </div> 
      <!-- End Model For Comments -->

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

