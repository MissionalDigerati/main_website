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
			$title = "79 Online";
			require_once('../partials/site_wide_css_js.inc.php'); 
		?>
	</head>
	<body>
		<div class="navbar">
	    <div class="navbar-inner">
	      <div class="container">
	        	<?php require_once('../partials/main_nav.inc.php'); ?>
	      </div>
	    </div>
	  </div>
		<div class="social_share hidden-phone hidden-tablet">
			<div class="inner">
				<div class="container">
					<?php require_once('../partials/add_this.inc.php'); ?>
				</div>
			</div>
		</div>
		<div class="slider">
			<div class="inner">
				<div class="container">
					<div class="camera_wrap">
					  <div data-src="/images/slider/sevennine.jpg"></div>
						<div data-src="/images/slider/seven_nine/multiple_languages.jpg"></div>
						<div data-src="/images/slider/seven_nine/mobilizer_resources.jpg"></div>
						<div data-src="/images/slider/seven_nine/absolutely_free.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	  <div class="content">
			<div class="inner">
				<div class="container home">
					  <div class="padded_content">
							<div class="project_details">
								<div id="project_video">
									<div class="video_container hidden-phone">
										<iframe src="http://player.vimeo.com/video/35395730" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
									</div>
								</div>
								<div id="project_tech_specs">
									<div class="well">
										<p><strong>Client:</strong> <a href="http://thebodybuilders.net" target="_blank">Center for Mission Mobilization</a><p>
										<p><strong>Devices:</strong> Windows, Mac OSX & Linux<p>
										<p><strong>Languages:</strong> <a href="http://www.zend.com" target="_blank">PHP</a>, Javascript, HTML & CSS<p>
										<p><strong>Libraries:</strong> <a href="http://expressionengine.com" target="_blank">ExpressionEngine</a><p>
										<p><strong>Status:</strong> Completed & Translated in 3 Languages<p>
										<p><strong>Type:</strong> Website<p>
										<p></p>
										<a href="http://79online.org/" target="_blank" class="btn btn-primary btn-large">Visit Now <i class="icon-white icon-share-alt"></i></a>
									</div>
								</div>
							</div>
							<blockquote class="pull-right">
								<p>After this I looked, and behold, a great multitude that no one could number, from every nation, from all tribes and peoples and languages, standing before the throne and before the Lamb, clothed in white robes, with palm branches in their hands, and crying out with a loud voice, "Salvation belongs to our God who sits on the throne, and to the Lamb!"</p>
								<small>Revelation 7 v 9</small>
							</blockquote>
							<p>The <a href="http://79online.org/" target="_blank">79 Online website</a> is a digital library of the best Christian missions resources to help point believers towards entire people groups who do not have an opportunity to hear the Word of God.  Providing video, audio, and text resources,  79 Online has developed a one stop shop for free digital missions focused tools.  It is a virtual stockpile of missions resources at your fingertips.</p>
							<div class="page-header">
							  <h2>Key Features</h2>
							</div>
							<div class="feature_box">
									<div class="featured">
										<img src="/images/site/projects/seven_nine/multiple_languages.jpg" alt="Computer with Website on It" class="hidden-phone">
										<h3>Multiples Languages</h3>
										<p>Currently translated in English, Portuguese, and Russian with plans to translate into other language.</p>
									</div>
									<div class="featured_last">
										<img src="/images/site/projects/seven_nine/resources.jpg" alt="Macbook Air with website on it" class="hidden-phone">
										<h3>Multiples Resource Types</h3>
										<p>Designed for every type of learner,  resources are available as video, audio, and text documents.</p>
									</div>
									<div class="featured">
										<img src="/images/site/projects/seven_nine/free.jpg" alt="Free Bird" class="hidden-phone">
										<h3>Absolutely Free</h3>
										<p>All the digital resources are free!</p>
									</div>
									<div class="featured_last"></div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="extra">
			<div class="inner">
				<div class="container">
					<?php require_once('../partials/mission.inc.php'); ?>
				</div>
			</div>
		</div>
	</body>
</html>