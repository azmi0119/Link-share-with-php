<?php
	
	$url = "https://gurushala.co/";
	$image ="https://gurushala.co/front/images/logo.png";
	$description = "Associate Software Developer
					Experience required for the Job: 0.6 - 2 years
					Annual Salary of the Job: 1.50 - 3.20 Lacs
					Job Location: Gurgaon/Gurugram";



?>

<!DOCTYPE html>
<html>
<head>
	<title>Share with data</title>
</head>
<body>

	<div class="social-buttons">
		<!-- Share with facebook -->
		<!-- <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
		target="_blank">
		<i class="fa fa-facebook-official"></i>
		</a>
 -->
		<!-- Share with Twitter -->
		<!-- <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}"
		target="_blank">
		<i class="fa fa-twitter-square"></i>
		</a>
 -->
		<!-- Share with Google -->
<!-- 		<a href="https://plus.google.com/share?url={{ urlencode($url) }}"
		target="_blank">
		<i class="fa fa-google-plus-square"></i>
		</a>
 -->
		<!-- Share with Pinterest -->
<!-- 		<a href="https://pinterest.com/pin/create/button/?{{
		http_build_query([
		'url' => $url,
		'media' => $image,
		'description' => $description
		])
		}}" target="_blank">
		<i class="fa fa-pinterest-square"></i>
		pinterest share
		</a> -->

<!-- 		<a class="w-inline-block social-share-btn lnk" href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;"></a> -->



		<a href="https://twitter.com/intent/tweet/?{{
		http_build_query([
		'url' => $url,
		'media' => $image,
		'description' => $description
		])
		}}" target="_blank">
		<i class="fa fa-pinterest-square"></i>
		LinkedIn share
		</a>

	</div>


</body>
</html>