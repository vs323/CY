<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // the form has fields for name, email, and message
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $number = trim($_POST["number"]);
    $message = trim($_POST["message"]);

    // the fields name, email, and message are required
    if ($name == "" OR $email == "" OR $number == "" OR $message == "") {
        $error_message = "You must specify a value for name, email address, phone number, and message.";
    }

    // this code checks for malicious code attempting
    // to inject values into the email header
    if (!isset($error_message)) {
        foreach( $_POST as $value ){
            if( stripos($value,'Content-Type:') !== FALSE ){
                $error_message = "There was a problem with the information you entered.";
            }
        }
    }

    // the field named address is used as a spam honeypot
    // it is hidden from users, and it must be left blank
    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "HEY YOU! Why would you wanna do this?";
    }

    require_once("../phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message = "You must specify a valid email address.";
    }

    // if, after all the checks above, there is no message, then we
    // have a valid form submission; let's send the email
    if (!isset($error_message)) {
        $email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Email: " . $email . "<br>";
        $email_body = $email_body . "Number: " . $number . "<br>";
        $email_body = $email_body . "Message: " . $message;

    
    require '../PHPMailerAutoload.php';
		$mail = new PHPMailer;
		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'wokitup.phillip@gmail.com';                 // SMTP username
		$mail->Password = '密码';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
		
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->addAddress('wokitup.phillip@gmail.com', 'Wokitup Phillip');     // Add a recipient
		$mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo('info@example.com', 'Information');
		$mail->addCC('cc@example.com');
		$mail->addBCC('bcc@example.com');
		
		$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'Feedback';
		$mail->Body    = $message;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // if the email is sent successfully, redirect to a thank you page;
        // otherwise, set a new error message
        if($mail->Send()) {
            header("Location: " . "contact/?status=thanks");
            exit;
        } else {
          $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
        }

    }
}

?>




<section class="contact_us">
	<div class="container_box_dk">
		<h2>Contact Us</h2>
		<div class="little_line"></div>
		<P>Thanks for your interest in YC Building. Please use the following form to get a free quote for your plan or send any enquries, and we'll get back to you soon.</P>
	</div>
	<div class="contact_form_div">

	<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
            <?php } else { ?>

                <?php
                    if (!isset($error_message)) {
                        echo '<p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>';
                    } else {
                        echo '<p class="message">' . $error_message . '</p>';
                    }
                ?>

		<form action="contact/" method="post">
			<div class="form_name">
				<div class="label_p"><label for="name">Full Name: </label><span>(Required)</span></div>
				<input type="text" id="name" name="name" placeholder="Full Name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>" required>
			</div>
			<div class="form_name">
				<div class="label_p"><label for="email">Email: </label><span>(Required)</span></div>
				<input type="email" id="email" name="email" placeholder="Your Email" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>" required><br>
			</div>
			<div class="form_name">
				<div class="label_p"><label for="number">Phone Number: </label><span>(Required)</span></div>
				<input type="number" id="number" name="number" min="0" inputmode="numeric" pattern="[0-9]*" title="Non-negative integral number" placeholder="Phone Number" value="<?php if(isset($number)) { echo htmlspecialchars($number); } ?>"required><br>
			</div>
			<div class="form_name">
				<div class="label_p"><label for="message">Message: </label><span>(Required)</span></div>
				<textarea type="text" id="message" name="message" placeholder="Message Details" value="<?php if(isset($message)) { echo htmlspecialchars($message); } ?>" required></textarea><br>
			</div>
			<!-- the field named address is used as a spam honeypot -->
			<div style="display:none;">
				<label for="address">Address</label>
				<input type="text" name="address" id="address" />
				<p>HEY YOU!!! Please leave this field blank.</p>
			</div>
			<div class="form_send">
				<input type="submit" value="Send">
				<input type="reset" value="Reset">
			</div>
		</form>
		 <?php } ?>
	</div>

	<!-- <div> Your message has been successfully sent. </div> -->
</section>