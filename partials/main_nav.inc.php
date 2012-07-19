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
if(isset($_SERVER["REQUEST_URI"])) {
	$requestedUrl = substr($_SERVER["REQUEST_URI"], 1);
}else {
	$requestedUrl = '';
}
?>
<a class="btn btn-navbar nav-display-button" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
</a>
<a class="brand" href="/">
	<img src="/images/site/logo.png" alt="Missional Digerati" title="Missional Digerati" id="logo" /><br>
	<span class="tagline">Mobile & Web Apps for the Christian Missional Community</span>
</a>
<div class="nav-collapse">
	<ul class="nav pull-right">
		<li<?php if($requestedUrl ==''){ echo ' class="active"'; } ?>><a href="/">Home</a></li>
		<li<?php if($requestedUrl =='about-us'){ echo ' class="active"'; } ?>><a href="/about-us">About Us</a></li>
		<li class="dropdown" id="#projects" class="active">
			<a href="#projects" class="dropdown-toggle" data-toggle="dropdown">Projects<b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li<?php if(strpos($requestedUrl, 'jp-mobile') !== false){ echo ' class="active"'; } ?>><a href="/projects/jp-mobile">Joshua Project Mobile App</a></li>
				<li<?php if(strpos($requestedUrl, 'open-bible-stories') !== false){ echo ' class="active"'; } ?>><a href="/projects/open-bible-stories">Open Bible Stories</a></li>
				<li<?php if(strpos($requestedUrl, 'seven-nine-online') !== false){ echo ' class="active"'; } ?>><a href="/projects/seven-nine-online">Seven Nine Online</a></li>
			</ul>
		</li>
		<li<?php if($requestedUrl =='submit-an-idea'){ echo ' class="active"'; } ?>><a href="/submit-an-idea">Submit an Idea</a></li>
		<li><a href="https://github.com/organizations/MissionalDigerati" target="_blank">Code Repo</a></li>
		<li<?php if($requestedUrl =='contact-us'){ echo ' class="active"'; } ?>><a href="/contact-us">Contact Us</a></li>
		<!-- <li class="visible-phone"><a href="/" title="Donate">Donate</a></li>
				<li class="donate hidden-phone"><div><a class="btn btn-primary" href="/donate" title="Donate">Donate</a></div></li> -->
	</ul>
</div>
<?php
/**
 * Trigger the dropdown if we are on a projects page
 * 
 * @author Johnathan Pulos
 */
if(strpos($requestedUrl, 'projects') !== false){ 
	echo '<script type="text/javascript" charset="utf-8">$(document).ready(function() {$("a.dropdown-toggle").trigger("click");})</script>';
}
?>