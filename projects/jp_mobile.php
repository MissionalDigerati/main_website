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
			$title = "Joshua Project Mobile";
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
					  <div data-src="/images/slider/jp_mobile.jpg"></div>
						<div data-src="/images/slider/jp_mobile/data_on_the_go.jpg"></div>
						<div data-src="/images/slider/jp_mobile/multiple_platforms.jpg"></div>
						<div data-src="/images/slider/jp_mobile/swiss_army_knife.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	  <div class="content">
			<div class="inner">
				<div class="container home">
					  <div class="padded_content">
							<div class="page-header">
							  <h2>Projects: Joshua Project Mobile App</h2>
							</div>
							<div class="project_details">
								<div id="project_video">
									<div class="video_container hidden-phone">
										<iframe src="http://www.youtube.com/embed/e_fmuaFf_z4" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
								<div id="project_tech_specs">
									<div class="well">
										<p><strong>Client:</strong> <a href="http://www.joshuaproject.net" target="_blank">Joshua Project</a><p>
										<p><strong>Devices:</strong> <a href="http://jquerymobile.com/gbs/" target="_blank">See JQuery Mobile Documentation</a><p>
										<p><strong>Languages:</strong> <a href="http://rubyonrails.org" target="_blank">Ruby on Rails</a>, Javascript, HTML & CSS<p>
										<p><strong>Libraries:</strong> <a href="http://jquery.com/" target="_blank">JQuery</a> & <a href="http://jquerymobile.com/" target="_blank">JQuery Mobile</a><p>
										<p><strong>Status:</strong> Completed<p>
										<p><strong>Type:</strong> Web Based Mobile Application<p>
										<p></p>
										<a href="http://m.joshuaproject.net" target="_blank" class="btn btn-primary btn-large">Visit Now <i class="icon-white icon-share-alt"></i></a>
									</div>
								</div>
							</div>
							<p><a href="http://www.joshuaproject.net/" target="_blank">Joshua Project</a> is a research initiative seeking to highlight the ethnic people groups of the world with the fewest followers of Christ. Joshua Project gathers, integrates and shares people group information to encourage pioneer church-planting movements among every ethnic group and to facilitate effective coordination of mission agency efforts.</p>
							<p>The Joshua Project Mobile App gives you the ability to access their information on thousands of people groups, see data on hundreds of countries, flick through amazing photos, learn about famous missionaries or even share the gospel.</p>
							<div class="page-header">
							  <h3>Key Features</h3>
							</div>
							<div class="feature_box">
									<div class="featured">
										<img src="/images/site/projects/jp_mobile/iphone_w_app.jpg" alt="iPhone 4 with App" class="hidden-phone">
										<h4>Portable Resource Library</h4>
										<p>Access Joshua Project's immense library of ethnic people group data, and country data from your phone or tablet device.</p>
									</div>
									<div class="featured_last">
										<img src="/images/site/projects/jp_mobile/g1_with_app.jpg" alt="G1 With App" class="hidden-phone">
										<h4>Multiple Platforms</h4>
										<p>Harnessing the power of <a href="http://jquerymobile.com/" target="_blank">JQuery Mobile</a>,  you can access the data on many of the common mobile phone and tablet devices.  This includes iOS, Android, Blackberry, and Windows based mobile phones and tablet devices.  To see a complete list of devices,  please visit the <a href="http://jquerymobile.com/gbs/" target="_blank">JQuery Mobile Documentation</a></p>
									</div>
									<div class="featured">
										<img src="/images/site/projects/jp_mobile/blackberry_w_app.jpg" alt="Blackberry with App" class="hidden-phone">
										<h4>Missions 101 Tools</h4>
										<p>Access missionary biographies, missions facts and statistics, various articles on missions, and even a Gospel presentation from the palm of your hand.</p>
									</div>
									<div class="featured_last"></div>
							</div>
							
							<p class="emphasis_quote">"Missional Digerati is a platform to involve Christians with technical skills in the Great Commission and blesses mission organizations in one of their areas of greatest need." - Dan Scribner @ Joshua Project</p>
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