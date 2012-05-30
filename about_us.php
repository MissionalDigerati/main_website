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
						<iframe src="http://www.youtube.com/embed/wx7HNnJVb6A" frameborder="0" allowfullscreen></iframe>
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
						<div class="page-header">
						  <h2>Our Digeratis</h2>
						</div>
							<div class="box100 staff">
								<div class="staff_pic">
									<img src="/images/site/johnathan_pulos.jpg" alt="Johnathan Pulos">
									<div class="skills_box hidden-phone">
										<img src="/images/site/skills/php.png" alt="PHP" title="PHP website Programming Language" width="50%">
										<img src="/images/site/skills/ruby.png" alt="Ruby" title="Ruby website Programming Language" width="50%">
										<img src="/images/site/skills/ios.png" alt="iOS" title="iPhone App Development" width="50%">
									</div>
								</div>
								<div class="staff_bio">
									<h3>Johnathan Pulos</h3>
								  <h4>Project Director & Programmer</h4>
								  <p>Johnathan was originally trained to be a teacher, and received his Bachelor of Arts in History in 2000.  However, after receiving his California teaching credential in 2004,  God led to him a new path for his life in the realm of technology.  With a passion to help people find a church, Johnathan developed his first website titled FindMyChurch.net.  This website eventually led to Johnathan becoming lead web developer and partner in a web development firm called PolySys Consulting.  With help from his partner Abe,  PolySys Consulting became the training ground for Johnathan's future career in programming.<br><br></p>
								  <p>Johnathan has since been developing websites for over 6 years,  programming in languages like PHP and Ruby.  Over the last year,  Johnathan has challenged himself to learn Objective C, the language used for developing iPhone applications.  A few months ago,  he launched his first iPhone App,  titled SGUC, for his church San Gabriel Union Church.<br><br></p>
								  <p>Johnathan believes the key to being a great programmer is always desiring to learn  new things.  At the rate technology changes, programmers must challenge themselves to become life long learners.<br><br></p>
								  <p>Johnathan is married to his wife Candice, and has 2 spoiled dogs named Max and Mandy.  You can contact Johnathan at johnathan[at]missionaldigerati.org.<br><br></p>
								  <p><strong>Personal Website:</strong> <a href="http://www.codemis.com" target="_blank">Codemis.com</a><p>
								  <p><strong>Supporter Website:</strong> <a href="http://www.onthesamepath.com" target="_blank">OntheSamePath.com</a><p>
								  <p><strong>Twitter:</strong> <a href="http://www.twitter.com/jpulos" target="_blank">JPulos</a><p>
									<p><strong>Github:</strong> <a href="https://github.com/codemis" target="_blank">Codemis</a><p>
								  <p><strong>Email:</strong> johnathan[at]missionaldigerati.org<p>
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