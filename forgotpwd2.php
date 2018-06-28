
<?php
session_start();
if(isset($_SESSION['sesid']))
{
	header('location:user/index.php');
}
?>
<?php
require('data.php');
if(isset($_POST['data']))
{
$data=$_POST['data'];
$query = "SELECT * FROM users WHERE email='$data'";
$result = mysqli_query($link,$query) or die(mysql_error());
$count =mysqli_num_rows($result);
if($count == 1)
		{
			$email=$data;
			$sql="SELECT phone FROM users WHERE email='$email'";
			$query1 = mysqli_query($link, $sql);
			while($rs = mysqli_fetch_array($query1))
			{
				$phone=$rs['phone'];
				$uid = mt_rand(100000, 999999);
				$sql="UPDATE users SET reset='$uid' WHERE email='$email'";
				$result =mysqli_query($link,$sql);
				{
					$to=$email;
					$subject = "Password Reset mail from INSMART";
					$message='
						Greetings from INSMART.
						Enter this code to reset your password : '.$uid.' 
						This is a system generated email please do not reply here.
						For further info contact us at help@insmart.com
						';
					$header='From:noreply@insmart.com'."\r\n".
					'Reply-To:feedback@insmart.com'."\r\n".
					'X-Mailer:PHP/'. phpversion();
					$retval = mail ($to,$subject,$message,$header);
					{
						/*Send SMS using PHP*/    
						//Your authentication key
						$authKey = "";
						//Multiple mobiles numbers separated by comma
						$mobileNumber ="+91".$phone;
						//Sender ID,While using route4 sender id should be 6 characters long.
						$senderId = "INSMART";
						//Your message to send, Add URL encoding here.
						$message = urlencode("Your password reset code is $phone");
						//Define route 
						$route = "4";
						//Prepare you post parameters
						$postData = array
						(
							'authkey' => $authKey,
							'mobiles' => $mobileNumber,
							'message' => $message,
							'sender' => $senderId,
							'route' => $route
						);
			
						//API URL
						$url="https://control.msg91.com/api/sendhttp.php";
						// init the resource
						$ch = curl_init();
						curl_setopt_array($ch, array(
						CURLOPT_URL => $url,
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_POST => true,
						CURLOPT_POSTFIELDS => $postData
						//,CURLOPT_FOLLOWLOCATION => true
						));
						//Ignore SSL certificate verification
						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
						//get response
						$output = curl_exec($ch);
						//Print error if any
						if(curl_errno($ch))
							{
								echo 'error:' . curl_error($ch);
							}
						curl_close($ch);
     				}
				}
			}
		}
	
else
	{
			$query = "SELECT * FROM users WHERE phone='$data'";
			$result = mysqli_query($link,$query) or die(mysql_error());
			$count =mysqli_num_rows($result);
			if($count == 1)
			{
				$phone=$data;
				$sql1="SELECT email FROM users WHERE phone='$phone'";
				$query2 = mysqli_query($link, $sql1);
				while($rs1 = mysqli_fetch_array($query2))
				{
				$email=$rs1['email'];
				$uid = mt_rand(100000, 999999);
				$sql="UPDATE users SET reset='$uid' WHERE email='$email'";
				$result =mysqli_query($link,$sql);
				{
						$to=$email;
						$subject = "Password Reset mail from INSMART";
						$message='
						Greetings from INSMART.
						Enter this code to reset your password : '.$uid.' 
						This is a system generated email please do not reply here.
						For further info contact us at help@insmart.com
						';
						$header='From:noreply@insmart.com'."\r\n".
						'Reply-To:feedback@insmart.com'."\r\n".
						'X-Mailer:PHP/'. phpversion();
						$retval = mail ($to,$subject,$message,$header);
						{
							/*Send SMS using PHP*/    
							//Your authentication key
							$authKey = "";
							//Multiple mobiles numbers separated by comma
							$mobileNumber ="+91".$phone;
							//Sender ID,While using route4 sender id should be 6 characters long.
							$senderId = "INSMART";
							//Your message to send, Add URL encoding here.
							$message = urlencode("Your password reset code is $phone");
							//Define route 
							$route = "4";
							//Prepare you post parameters
							$postData = array
							(
								'authkey' => $authKey,
								'mobiles' => $mobileNumber,
								'message' => $message,
								'sender' => $senderId,
								'route' => $route
							);
			
							//API URL
							$url="https://control.msg91.com/api/sendhttp.php";
							// init the resource
							$ch = curl_init();
							curl_setopt_array($ch, array(
							CURLOPT_URL => $url,
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_POST => true,
							CURLOPT_POSTFIELDS => $postData
							//,CURLOPT_FOLLOWLOCATION => true
							));
							//Ignore SSL certificate verification
							curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
							curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
							//get response
							$output = curl_exec($ch);
							//Print error if any
							if(curl_errno($ch))
								{
									echo 'error:' . curl_error($ch);
								}
							curl_close($ch);
						}
				}
			}
			}
else
	{
		header('location:forgotpassword.php?email=email');
	}
}	
}
else
{
header('location:index.php');
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
      
<div>
        <div class="container">
    <div class="row"  style="background-color: #f1f1f1;">
       
      <div class="col-md-2">
        
      </div>
      <div class="col-md-8">
        <div class=" reg-frm">
        <div class="frm-titles" style="margin-bottom: 20px;">
          <div>
            <h4 style="text-align: center;">Forgot Password</a></h4>
          </div>
        </div>
		<?php if(isset($_GET['user1']))
        {
      echo '<div class="col-sm-12">';
      echo '<div style="border: 1px #ff0000 solid;padding: 3px;text-align: center;margin-left: 63px;margin-right: 63px;color:#ff0000;">';
        
          echo "<h3>Wrong OTP !! Wait few minutes and enter new OTP</h3>";
        
      
      echo '</div>';
      echo '</div>';}
	  ?>
  <form class="form-horizontal" action="resetpwd.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="otp">Enter OTP<span class="error"> *</span></label>
      <div class="col-sm-8" style="padding-right: 80px;">
        <input type="text" class="form-control" id="otp" placeholder="Enter OTP" name="otp">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Password<span class="error"> *</span></label>
      <div class="col-sm-8" style="padding-right: 80px;">
        <input type="Password" class="form-control" id="password" placeholder="Enter New password" name="rpwd">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-4" for="email">Confirm Password<span class="error"> *</span></label>
      <div class="col-sm-8" style="padding-right: 80px;">
        <input type="Password"   class="form-control" id="cpassword" placeholder="Enter Confirm Password" name="Email">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-md-offset-4 col-sm-8">
        <div style="display: inline-block;">
        <button type="submit" name="email" value="<?php $id=$email; echo $id;?>" class="newsubmit">Submit</button>
        </div>
      </div>
      
    </div>
  </form>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</div>    

       
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

