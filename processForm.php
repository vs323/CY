<?php
 
// Clean up the input values

 
// Assign the input values to variables for easy reference
$name = trim($_POST["name"]);
$email =trim($_POST["email"]);
$number = trim($_POST["number"]);
$message = trim($_POST["message"]);
 
// Test input values for errors


$errors = array();
if(strlen($name) < 2) {
  if(!$name) {
    $errors[] = "You must enter a name.";
  } else {
    $errors[] = "Name must be at least 2 characters.";
  }
}
if(!$email) {
  $errors[] = "You must enter an email.";
} else if(!validEmail($email)) {
  $errors[] = "You must enter a valid email.";
}
if(strlen($message) < 10) {
  if(!$message) {
    $errors[] = "You must enter a message.";
  } else {
    $errors[] = "Message must be at least 10 characters.";
  }
}
 
if($errors) {
  // Output errors and die with a failure message
  $errortext = "";
  foreach($errors as $error) {
    $errortext .= "<li>".$error."</li>";
  }
  die("<span class='failure'>The following errors occured:<ul>". $errortext ."</ul></span>");
}

// Send the email





    require 'PHPMailerAutoload.php';
		$mail = new PHPMailer;
 
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'ycbuildingsmtp@gmail.com';                 // SMTP username
		$mail->Password = 'P@ssw0rdd123';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
		
		$mail->From = $email;
		$mail->FromName = "Enquiry From YCBuilding Website";
		
		
		$mail->addAddress('rickyuq@gmail.com'); 
		$mail->Subject = 'Enquiry';
		$mail->Body  .= "Client Name:";
		$mail->Body  .= "\n";
		$mail->Body  .= $name;
		$mail->Body  .= "\n";
		$mail->Body  .= "\n";
		$mail->Body  .= "Client Message:";
		$mail->Body  .= "\n";
		$mail->Body  .= $message;
		$mail->Body  .= "\n";
		$mail->Body  .= "\n";
		$mail->Body  .= "Client Contact Number";
		$mail->Body  .= "\n";
		$mail->Body  .= $number;
		$mail->Body  .= "\n";
		$mail->Body  .= "\n";
		$mail->Body  .= "Client Email:";
		$mail->Body  .= "\n";
		$mail->Body  .= $email;
		
		

		
		
 
//mail($to, $subject, $message, $headers);
 
// Die with a success message
if($mail->Send()) {
die("<span class='success'>Your message has been sent. Thank you.</span>");
}
else{
die("<span class='fail_bad'>Something went wrong. Please try again later.</span>");
} 
// A function that checks to see if
// an email is valid

function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}

 
?>