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
$skills = '';
$message = "";
$phoneNumber = '';
$alertType = "";
$currentTab = "staffing";
$staffingType = "volunteer";
if(isset($_POST) && !empty($_POST)) {
	$validate = new FormValidationHelper($_POST);
	/**
	 * Handle the Join form
	 *
	 * @author Johnathan Pulos
	 */
	if($_POST['form_type'] == 'volunteer_join') {
		$currentTab = "staffing";
		/**
		 * Validate the passed data
		 *
		 * @author Johnathan Pulos
		 */
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
			$mail->Subject =  'Missional Digerati:  Volunteer or Join Form';
			$mail->From = $emailSettings['volunteer']['from'];
			$mail->FromName = $emailSettings['volunteer']['from_name'];
			$to = $emailSettings['volunteer']['to'];
			$mail->AddAddress($to, '');
			$emailMessage = "Dear Project Director,\r\nA visitor has requested more information on volunteering or joining Missional Digerati.  Here are the details:\r\n";
			$emailMessage .= "From: " . strip_tags($_POST['name']) . " - " . strip_tags($_POST['email']) . "\r\n";
			$emailMessage .= "Phone: " . strip_tags($_POST['phone_number']) . "\r\n";
			$emailMessage .= "Interested In: " . strip_tags($_POST['interested_in']) . "\r\n";
			$emailMessage .= "Skills: " . strip_tags($_POST['skills']) . "\r\n";
			$emailMessage .= "Hope that helps.  Take care, and God Bless.\r\n Your Machine";
			$mail->Body = $emailMessage;
			$mail->IsHTML(false);
			$mail->Send();
			$message = "Thank you!  Your interest in volunteering/joining Missional Digerati has been submitted.";
			$alertType = "alert-success";
		}else {
			/**
			 * There was an error.  Prepare to feed data back tot the form
			 *
			 * @author Johnathan Pulos
			 */
			$name = strip_tags($_POST['name']);
			$email = strip_tags($_POST['email']);
			$phone_number = strip_tags($_POST['phone_number']);
			$skills = strip_tags($_POST['skills']);
			$staffingType = strip_tags($_POST['interested_in']);
			$message = "I am sorry, but there was a problem with your submission.";
			$alertType = "alert-error";
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "Contribute";
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
						<blockquote class="pull-right margin-top-bottom">
							<p>If you think you're too small to be effective, then you haven't spent a night in bed with a mosquito.</p>
							<small>Arianna Huffington</small>
						</blockquote>
						<div class="clearfix"></div>
						<div class="tabbable tabs-top">
							<ul class="nav nav-tabs">
						    <!-- <li<?php if($currentTab == 'donate'){ echo " class='active'";} ?>><a href="#donate-tab" data-toggle="tab">Donate</a></li> -->
								<!-- <li<?php if($currentTab == 'staffing'){ echo " class='active'";} ?>><a href="#serve-tab" data-toggle="tab">Volunteer/Join</a></li> -->
						  </ul>
						  <div class="tab-content">
						    <!-- <div class="tab-pane<?php if($currentTab == 'donate'){ echo " active";} ?>" id="donate-tab">
									<p>Donate Now</p>
								</div> -->
								<div class="tab-pane<?php if($currentTab == 'staffing'){ echo " active";} ?>" id="serve-tab">
									<form class="form-horizontal" method="POST" action="/contribute" id="contribute_skills_form">
									  <fieldset>
									    <legend>Volunteer/Join Missional Digerati</legend>
											<p>Missional Digerati is powered by passionate volunteers and full-time staff that love God, and desire to leverage technology for kingdom purposes.  If you are interested in donating a few hours a week, or participating full-time,  please fill out the following form for more information.</p>
											<?php if($message != ''): ?>
												<div class="alert <?php echo $alertType; ?>">
													<?php echo $message; ?>
												</div>
											<?php endif; ?>
											<input type="hidden" name="form_type" value="volunteer_join">
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
						            <label class="control-label" for="interested_in">Interested In</label>
						            <div class="controls">
						              <label class="radio">
						                <input type="radio" name="interested_in" value="volunteer"<?php if($staffingType == 'volunteer') { echo ' checked';} ?>>
						                Volunteering
						              </label>
						              <label class="radio">
						                <input type="radio" name="interested_in" value="full-time"<?php if($staffingType == 'full-time') { echo ' checked';} ?>>
						                Becoming full-time staff
						              </label>
						            </div>
						          </div>
											<div class="control-group">
												<label class="control-label" for="contact_skills">Your Skills</label>
									      <div class="controls">
									        <textarea class="input-xlarge" name="skills" rows="10"><?php echo $skills; ?></textarea>
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