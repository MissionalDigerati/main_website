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
					    <div data-src="images/slider/what_is_md.jpg" data-link="#about_md">
					    	<div class="camera_caption">Want to learn more about Missional Digerati?</div>
					    </div>
					    <div data-src="images/slider/jp_mobile.jpg">
					    	<div class="camera_caption">Joshua Project Mobile App - Joshua Project's massive database is now accessible on a wide range of mobile and tablet devices.</div>
					    </div>
					    <div data-src="images/slider/sevennine.jpg">
					    	<div class="camera_caption">79Online.org - Resourcing YOU to reach the rest!</div>
					    </div>
							<div data-src="images/slider/open_bible_stories.jpg">
					    	<div class="camera_caption">Open Bible Stories - Crowd sourcing the translation of Jesus' message.</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	  <div class="content">
			<div class="inner">
				<div class="container home">
					<div class="row">
					  <div class="span10 offset1">
							<p>Missional Digerati is a mobile and web application development team that is:</p>
							<ul>
								<li><span class="highlighted">Nomadic in Nature</span> - We work with the greater Christian missional community.</li>
								<li><span class="highlighted">Purposeful</span> - We only accept projects that engage and impact the least reached people groups of the world.</li>
								<li><span class="highlighted">Open</span> - We share completed projects with organizations within the Christian missional community.</li>
								<li><span class="highlighted">Idea Generator</span> - We are always looking for new ways to exploit technology for kingdom work.</li> 
							</ul>
						</div>
						<div class="span1"></div>
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