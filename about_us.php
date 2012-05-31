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
?>
<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "About Us";
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
		<div class="video_player">
			<div class="inner">
				<div class="container">
					<div class="video_container">
						<iframe src="http://www.youtube.com/embed/wx7HNnJVb6A?wmode=transparent " frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	  <div class="content">
			<div class="inner">
				<div class="container about-us">
					<div class="padded_content">
						<div class="page-header">
						  <h2>Missional Digerati</h2>
						</div>
						<p class="emphasis_quote">"Missional Digerati is a community of thinkers, designers and developers committed to exploiting breakthroughs in technology in order to advance the pace of reaching every person on earth with the good news of Jesus Christ."</p>

						<p>Missional Digerati is a web and mobile development team that is focused on providing up-to-date technological expertise to Christian missional organizations.  Working alongside these organizations,  Missional Digerati develops tools that can assist them in the work that they are trying to accomplish.  Exploiting breakthroughs in technology,  our team strives to develop tools that currently do not exist in the open source community.</p>
						
						<p>Digeratis,  our team members, are required to raise their own personal financial support.  This gives us the ability to offer our services for free.  We simply ask our clients to consider financially donating to the work of Missional Digerati.  By removing the financial barrier,  we are able to take on projects from any Christian mission organization.  In order to increase the usefulness of our tools,  we believe in sharing everything that we build.  So, when Missional Digerati completes a project, we share the source code openly with anyone in the Christian missional community who wants to use or modify the code base.  These products are also released under the <a href="http://www.gnu.org/licenses/" target="_blank">GNU General Public License</a>, insuring that our code will continue to be shared freely once it leaves our hands.</p>
						
						<p>Missional Digerati strives to be purposeful in all that we do.  As our mission statement says,  we strive "to advance the pace of reaching every person on earth with the good news of Jesus Christ".  In order to accomplish this,  we accept projects that impact areas of the world with the least amount of Christian representation.  We then prioritize these projects based on the needs of the greater missional community.</p>
						
						<p>If you are interested in learning more about Missional Digerati,  please send us a message through our <a href="/contact">contact page</a>, or if you have an idea you wish to submit,  please visit our <a href="/submit-a-project">project submission page</a>.</p>
 
						
						<div class="page-header">
						  <h2>Our Digeratis</h2>
						</div>
							<div class="box100 staff">
								<div class="staff_pic">
									<img src="/images/site/johnathan_pulos.jpg" alt="Johnathan Pulos">
									<div class="skills_box hidden-phone">
										<img src="/images/site/skills/php.png" alt="PHP" title="PHP website Programming Language">
										<img src="/images/site/skills/ruby.png" alt="Ruby" title="Ruby website Programming Language">
										<img src="/images/site/skills/ios.png" alt="iOS" title="iPhone App Development">
									</div>
								</div>
								<div class="staff_bio">
									<h3>Johnathan Pulos</h3>
								  <h4>Project Director & Programmer</h4>
								  <p>Johnathan was originally trained to be a teacher, and received his Bachelor of Arts in History in 2000.  However, after receiving his California teaching credential in 2004,  God led to him a new path for his life in the realm of technology.  With a passion to help people find a church, Johnathan developed his first website titled FindMyChurch.net.  This website eventually led to Johnathan becoming lead web developer and partner in a web development firm called PolySys Consulting.  With help from his partner Abe,  PolySys Consulting became the training ground for Johnathan's future career in programming.</p>
								  <p>Johnathan has since been developing websites for over 6 years,  programming in languages like PHP and Ruby.  Over the last year,  Johnathan has challenged himself to learn Objective C, the language used for developing iPhone applications.  A few months ago,  he launched his first iPhone App,  titled SGUC, for his church San Gabriel Union Church.</p>
								  <p>Johnathan believes the key to being a great programmer is always desiring to learn  new things.  At the rate technology changes, programmers must challenge themselves to become life long learners.</p>
								  <p>Johnathan is married to his wife Candice, and has 2 spoiled dogs named Max and Mandy.  You can contact Johnathan at johnathan[at]missionaldigerati.org.</p>
									<div class="well">
								  	<p><strong>Personal Website:</strong> <a href="http://www.codemis.com" target="_blank">Codemis.com</a><p>
								  	<p><strong>Support Website:</strong> <a href="http://www.onthesamepath.com" target="_blank">OntheSamePath.com</a><p>
								  	<p><strong>Twitter:</strong> <a href="http://www.twitter.com/jpulos" target="_blank">JPulos</a><p>
										<p><strong>Github:</strong> <a href="https://github.com/codemis" target="_blank">Codemis</a><p>
								  	<p><strong>Email:</strong> johnathan[at]missionaldigerati.org<p>
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