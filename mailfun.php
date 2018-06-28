					<?php
					require('data.php');
					$name=$_POST['name'];
					$email=$_POST['email'];
					$mobile=$_POST['mobile'];
					$mess=$_POST['message'];
					$email1=$_POST['submit'];
					$to=$email1;
					$subject = "Password Reset mail from INSMART";
					$message='
						Greetings from INSMART.
						The following user request more info about your store  
						name : '.$name.'
						email : '.$email.'
						mobile : '.$mobile.'
						message : '.$mess.'
						This is a system generated email please do not reply here.
						For further info contact us at help@insmart.com
						';
					$header='From:noreply@insmart.com'."\r\n".
					'Reply-To:feedback@insmart.com'."\r\n".
					'X-Mailer:PHP/'. phpversion();
					$retval = mail ($to,$subject,$message,$header);
					echo 'done';
					?>