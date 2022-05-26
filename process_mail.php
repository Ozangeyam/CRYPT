<?php 
require 'email_file/mail-function.php'; 
					if (isset($_GET['submit'])) {
						$to = "support@cryptbits.trade";
						$name = $_GET['name'];
						$subject = $_GET['subject'];
						$email = $_GET['email'];
						$body = "<h4>Sender Email: <a href='mailto:$email'>$email</a></h4>";
						$body .= $_GET['body'];
						$send = send_mail($to, $name, $subject, $body);
						if ($send) {
							header("Location: contact?status=success");
    						exit();
						}else{
							header("Location: contact?status=fail");
    						exit();
						}

					}

					 ?>