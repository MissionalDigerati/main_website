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
var collapsableOpen = false;
$(document).ready(function() {
	$('.dropdown-toggle').dropdown();
	$('.camera_wrap').camera({fx: 'simpleFade', portrait: true, height: '35%', loader: 'bar', loaderBgColor: '#242424', loaderColor: '#CBFE01', imagePath: 'vendor/images/camera/'});
	if($('div#tweet_box').length > 0) {
		getLatestTweet();
	}
	/**
	 * Handle the collapsable nav.  Since we are positioning the nav with a top css, we need to reset it everytime they close the collapsable nav.
	 */
	$('a.nav-display-button').live('click', function(event) {
		if(collapsableOpen === false) {
			$('ul.nav').css({top: '0px'});
			collapsableOpen = true;
		}else {
			$('ul.nav').css({top: '10px'});
			collapsableOpen = false;
		}
	});
	if($('div.resizable-video').length > 0) {
		/**
		 * Resize the videos anytime they resize the page 
		 */
		resizeVideos();
		$(window).resize(function() {
				resizeVideos();
		});
		$(window).resize();
		/**
		 * Set on Timer to resize as well 
		 */
		window.setInterval(resizeVideos, 2000);
	}
});
/**
 * Get the latest tweet from MD 
 */
function getLatestTweet() {
	var tweet_box_html = '<hr class="clearfix" />';
	$.getJSON("https://api.twitter.com/1/statuses/user_timeline.json?screen_name=M_Digerati&count=1&callback=?", 
	  function (data) {
			if(data.length >= 1) {
				tweet_box_html = tweet_box_html+'<blockquote class="pull-right">'+replaceURLWithHTMLLinks(data[0].text)+' <small>@M_Digerati via Twitter</small></blockquote>';
				$('div#tweet_box').html(tweet_box_html);
			}
	});
};
/**
 * Look through text and replace links with actual html linking 
 * @var String text the text to search
 * @return String
 * 
 * @link http://www.focal55.com/blog/jquery-tutorial-change-urls-text-links-automatically
 */
function replaceURLWithHTMLLinks(text) {
	var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
	return text.replace(exp,"<a href='$1' target='_blank'>$1</a>"); 
};
/**
 * Resize video based on the aspect width of the site
 * 0.5625 is 9 divided by 16 – the ratio of height to width in an HD video player.
 *  
 * http://technology.latakoo.com/2012/04/10/bootstrap-for-video/ 
 * 
 * @return void
 */
function resizeVideos() {
	var objectWidth = $('.resizable-video').width();
    $('div.resizable-video iframe').css({'height':(objectWidth * 0.5625)+'px', 'width': '100%'});
		$('div.resizable-video object').css({'height':(objectWidth * 0.5625)+'px', 'width': '100%'});
		$('div.resizable-video video').css({'height':(objectWidth * 0.5625)+'px', 'width': '100%'});
		$('div.resizable-video embed').css({'height':(objectWidth * 0.5625)+'px', 'width': '100%'});
		$('div.video_player, div.video_player div').css('height', (objectWidth * 0.5625)+'px');
};