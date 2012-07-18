<?php
/**
 * This file is part of Missional Digerati Website.
 * 
 * Missional Digerati Website is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Missional Digerati Website is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see 
 * <http://www.gnu.org/licenses/>.
 *
 * @author Johnathan Pulos <johnathan@missionaldigerati.org>
 * @copyright Copyright 2012 Missional Digerati
 * 
 */
require_once('config/settings.php');
require_once('php/form_validation_helper.php');
require_once('vendor/phpmailer/class.phpmailer.php');
require_once('vendor/phpmailer/class.smtp.php');
$nameError = false;
$emailError = false;
$spamError = false;
$phoneError = false;
$name = '';
$email = '';
$phoneNumber = '';
$contactMessage = '';
$message = "";
$alertType = "";
if(isset($_POST) && !empty($_POST)) {
	/**
	 * Validate the passed data
	 *
	 * @author Johnathan Pulos
	 */
	$validate = new FormValidationHelper($_POST);
	if(!$validate->isPresent('name')) {
		$nameError = true;
	}
	if(!$validate->isPresent('email')) {
		$emailError = true;
	}
	if(!$validate->isEmail('email')) {
		$emailError = true;
	}
	if(!$validate->isPresent('phone_number')) {
		$phoneError = true;
	}
	if($validate->isSpam('city')) {
		$spamError = true;
	}
	if(($nameError === false) && ($emailError === false) && ($spamError === false) && ($phoneError === false)) {
		/**
		 * Validation passed.  Lets email the client.
		 *
		 * @author Johnathan Pulos
		 */
		$mail = new PHPMailer(); // create a object to that class.
		$mail->IsMail();
		$mail->Timeout  = 360;
		$mail->Subject =  'Missional Digerati:  Contact Us';
		$mail->From = $emailSettings['contact_us']['from'];
		$mail->FromName = $emailSettings['contact_us']['from_name'];
		$to = $emailSettings['contact_us']['to'];
		$mail->AddAddress($to, '');
		$emailMessage = "Dear Project Director,\r\nYou have been contacted through the website.  Here are the details:\r\n";
		$emailMessage .= "From: " . strip_tags($_POST['name']) . " - " . strip_tags($_POST['email']) . "\r\n";
		$emailMessage .= "Phone: " . strip_tags($_POST['phone_number']) . "\r\n";
		$emailMessage .= "Message: " . strip_tags($_POST['contact_message']) . "\r\n";
		$emailMessage .= "Hope that helps.  Take care, and God Bless.\r\n Your Machine";
		$mail->Body = $emailMessage;
		$mail->IsHTML(false);
		$mail->Send();
		$message = "Thank you!  Your message has been sent.";
		$alertType = "alert-success";
	}else {
		/**
		 * There was an error.  Prepare to feed data back tot the form
		 *
		 * @author Johnathan Pulos
		 */
		$name = strip_tags($_POST['name']);
		$email = strip_tags($_POST['email']);
		$phoneNumber = strip_tags($_POST['phone_number']);
		$contactMessage = strip_tags($_POST['contact_message']);
		$message = "I am sorry, but there was a problem with your submission.";
		$alertType = "alert-error";
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "Contact Us";
			require_once('partials/site_wide_css_js.inc.php'); 
		?>
	</head>
	<body>
		<div class="navbar">
	    <div class="navbar-inner">
	      <div class="container">
	        	<?php require_once('partials/main_nav.inc.php'); ?>
	      </div>
	    </div>
	  </div>
		<div class="social_share hidden-phone hidden-tablet">
			<div class="inner">
				<div class="container">
					<?php require_once('partials/add_this.inc.php'); ?>
				</div>
			</div>
		</div>
	  <div class="content">
			<div class="inner">
				<div class="container about-us">
					<div class="padded_content">
						<div class="clearfix"></div>
						<form class="form-horizontal" method="POST" action="/contact-us" id="contact_us_form">
						  <fieldset>
						    <legend>Contact Us</legend>
								<p>Thank you for your interest in contacting us.  Please fill out the following form, and we will get back to you as soon as possible.</p>
								<?php if($message != ''): ?>
									<div class="alert <?php echo $alertType; ?>">
										<?php echo $message; ?>
									</div>
								<?php endif; ?>
						    <div class="control-group<?php if($nameError === true){ echo ' error';}?>">
						      <label class="control-label" for="name">Name</label>
						      <div class="controls">
						        <input type="text" class="input-xlarge" name="name" value="<?php echo $name; ?>">
										<?php if($nameError === true): ?>
											<span class="help-inline">Please provide a valid name.</span>
										<?php endif; ?>
						      </div>
								</div>
								<div class="control-group<?php if($emailError === true){ echo ' error';}?>">
									<label class="control-label" for="email">Email</label>
						      <div class="controls">
						        <input type="text" class="input-xlarge" name="email" value="<?php echo $email; ?>">
										<?php if($emailError === true): ?>
											<span class="help-inline">Please provide a valid email address.</span>
										<?php endif; ?>
						      </div>
								</div>
								<div class="control-group<?php if($phoneError === true){ echo ' error';}?>">
									<label class="control-label" for="phone_number">Phone Number</label>
						      <div class="controls">
						        <input type="text" class="input-xlarge" name="phone_number" value="<?php echo $phoneNumber; ?>">
										<?php if($phoneError === true): ?>
											<span class="help-inline">Please provide a valid phone number.</span>
										<?php endif; ?>
						      </div>
								</div>
								<div class="control-group city">
									<label class="control-label" for="city">City</label>
						      <div class="controls">
						        <input type="text" class="input-xlarge" name="city">
						      </div>
						    </div>
								<div class="control-group">
									<label class="control-label" for="contact_message">Your Message</label>
						      <div class="controls">
						        <textarea class="input-xlarge" name="contact_message" rows="10"><?php echo $contactMessage; ?></textarea>
						      </div>
						    </div>
								<div class="form-actions">
			            <button type="submit" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Send Message</button>
			          </div>
						  </fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="extra">
			<div class="inner">
				<div class="container">
					<?php require_once('partials/mission.inc.php'); ?>
				</div>
			</div>
		</div>
	</body>
</html>