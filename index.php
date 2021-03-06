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
			$title = "Redeeming Technology for Kingdom Work";
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
		<div class="slider">
			<div class="inner">
				<div class="container">
					<div class="camera_wrap">
					    <div data-src="images/slider/what_is_md.jpg" data-link="/about-us">
					    	<div class="camera_caption">Want to learn more about Missional Digerati?</div>
					    </div>
					    <div data-src="images/slider/jp_mobile.jpg" data-link="/projects/jp-mobile">
					    	<div class="camera_caption">Joshua Project Mobile App - Joshua Project's massive database is now accessible on a wide range of mobile and tablet devices.</div>
					    </div>
					    <div data-src="images/slider/sevennine.jpg" data-link="/projects/seven-nine-online">
					    	<div class="camera_caption">79Online.org - Resourcing YOU to reach the rest!</div>
					    </div>
							<div data-src="images/slider/open_bible_stories.jpg" data-link="/projects/open-bible-stories">
					    	<div class="camera_caption">Open Bible Stories - Crowd sourcing the translation of Jesus' message.</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	  <div class="content">
			<div class="inner">
				<div class="container home">
					  <div class="padded_content">
							<p>Missional Digerati is a mobile and web application development team that is:</p>
							<ul>
								<li><span class="highlighted_green">Nomadic in Nature</span> - We work with the greater Christian missional community.</li>
								<li><span class="highlighted_green">Purposeful</span> - We only accept projects that engage and impact the least reached people groups of the world.</li>
								<li><span class="highlighted_green">Open</span> - We share completed projects with organizations within the Christian missional community.</li>
								<li><span class="highlighted_green">Idea Generator</span> - We are always looking for new ways to exploit technology for kingdom work.</li> 
							</ul>
							<div id="tweet_box"></div>
							<div id="tweet_button_box" class="clearfix margin-bottom text-right">
								<a href="https://twitter.com/M_Digerati" class="twitter-follow-button" data-show-count="false">Follow @M_Digerati</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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