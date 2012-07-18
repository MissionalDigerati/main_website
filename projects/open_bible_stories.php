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
					  <div data-src="/images/slider/open_bible_stories.jpg"></div>
						<div data-src="/images/slider/open_bible_stories/api_service.jpg"></div>
						<div data-src="/images/slider/open_bible_stories/crowdsourcing.jpg"></div>
						<div data-src="/images/slider/open_bible_stories/street_sign.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	  <div class="content">
			<div class="inner">
				<div class="container home">
					  <div class="padded_content">
							<div class="page-header">
							  <h2>Projects: Open Bible Stories</h2>
							</div>
							<div class="project_details">
								<div id="project_video">
									<div class="video_container hidden-phone">
										<iframe src="http://www.youtube.com/embed/IVbjdzZtSIQ" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
								<div id="project_tech_specs">
									<div class="well">
										<p><strong>Client:</strong> <a href="http://www.dsmedia.org" target="_blank">Distant Shores Media</a><p>
										<p><strong>Devices:</strong> Windows, Mac OS X & Linux<p>
										<p><strong>Languages:</strong> <a href="http://www.zend.com" target="_blank">PHP</a>, Javascript, HTML & CSS<p>
										<p><strong>Libraries:</strong> <a href="http://cakePHP.org" target="_blank">CakePHP</a><p>
										<p><strong>Status:</strong> In Progress<p>
										<p><strong>Type:</strong> Web Based API<p>
										<p></p>
										<a href="https://github.com/MissionalDigerati/video_translator_service" target="_blank" class="btn btn-primary btn-large">View Source Code <i class="icon-white icon-share-alt"></i></a>
									</div>
								</div>
							</div>
						<p><a href="http://www.openbiblestories.com/" target="_blank">Open Bible Stories</a> is an open project to create A Visual Mini-Bible in Every Language.  In order to translate these visual stories, we are building a video translation API that will be powered by online crowdsourcing.  Crowdsourcing provides a way for any person around the world to help in the translation of these stories.  These individuals will simply upload their audio files to a website, and the API will process and piece together a translated version of the video.  The ultimate goal is to create a tool that any mission agency can use to aid in the translation of their video resources.  To learn more about Open Bible Stories,  please visit the <a href="http://www.dsmedia.org/blog/how-open-bible-stories-works" target="_blank">Distant Shores Media Blog</a>.</p>
							<div class="page-header">
							  <h3>Key Features</h3>
							</div>
							<div class="feature_box">
									<div class="featured">
										<img src="/images/site/projects/obs/earth.jpg" alt="Earth" class="hidden-phone">
										<h4>Crowdsourcing Video Translation</h4>
										<p>Employing up to <a href="http://www.internetworldstats.com/stats.htm" target="_blank">2.26 billion internet users worldwide</a> in the translation of visual Bible stories.</p>
									</div>
									<div class="featured_last">
										<img src="/images/site/projects/obs/street_sign.jpg" alt="Multilingual Street Sign" class="hidden-phone">
										<h4>Visual Bible Stories for Every Language</h4>
										<p>Over <a href="http://www.youtube.com/t/press_statistics/" target="_blank">3 billion hours</a> of video are consumed per month on Youtube.  These video services have made video the dominate technology for distributing the Bible in every language around the globe.</p>
									</div>
									<div class="featured">
										<img src="/images/site/projects/obs/mobile_phone.jpg" alt="Mobile Phone" class="hidden-phone">
										<h4>Powered by an API</h4>
										<p>Application programming interfaces, or APIs, provide a vehicle for sharing the video translation process across multiple applications.  With one video translation service running,  you can power your Android App,  iPhone App, and website in one central place.</p>
									</div>
									<div class="featured_last"></div>
							</div>
							<p><small>The street sign is a derivative work of <a href="http://en.wikipedia.org/wiki/User:Destron_Commander" target="_blank">Destron Commander on Wikipedia</a></small></p>
							
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