<?php 
// Copyright (c) 2009-2011 Ryan Ours. www.ryanours.com
// Footer generator for angelabeaulieuphoto.com

$uri_path = $_SERVER['SERVER_NAME'];
if ($uri_path == 'dev.ryanours.com'){
	$uri_path = $uri_path.'/angelabeaulieuphoto.com';
}
$basepath = 'http://'.$uri_path;
$imagepath = $basepath.'/images/';
?>
	<div id="footer">
		<ul class="social-networking">
			<li>
				<a class="twitter" href="http://twitter.com/angbphotography" title="Follow me on Twitter!"></a>
			</li>
			<li>
				<a class="facebook" href="http://www.facebook.com/pages/St-Petersburg-FL/Angela-Beaulieu-Photography/261466650362" title="Check out my Facebook page!"></a>
			</li>
			<li>
				<a class="myspace" href="http://myspace.com/angelabeaulieuphoto" title="Friend me on Myspace!"></a>
			</li>
			<li>
				<a class="flickr" href="http://flickr.com/prettys13" title="Check out my Flickr galleries!"></a>
			</li>
			<li>
				<a class="modelmayhem" href="http://modelmayhem.com/prettys13" title="Check out my Model Mayhem page!"></a>
			</li>
			<li>
				<a class="mail" href="mailto:info@angelabeaulieuphoto.com" title="Email me!"></a>
			</li>
		</ul>
		<p class="footer">&copy; 2011 Angela Beaulieu | Site design by <a href="http://www.ryanours.com">Ryan Ours</a></p>
	</div>
	</div>
	<?php if ($uri_path == 'angelabeaulieuphoto.com'){ include_once("analyticstracking.php"); } ?>
</body>
</html>