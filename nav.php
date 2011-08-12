<?php 
// Copyright (c) 2009-2011 Ryan Ours. www.ryanours.com
// Footer generator for angelabeaulieuphoto.com

$uri_path = $_SERVER['SERVER_NAME'];
if ($uri_path == 'dev.rynoceris.com'){
	$uri_path = $uri_path.'/angelabeaulieuphoto.com';
}
$basepath = 'http://'.$uri_path;
$imagepath = $basepath.'/images/';
?>
<div id="nav">
	<h2><a <?php if ($page == 'home') { echo 'class="active"'; } ?> href="<?php echo $basepath; ?>/">home</a> | </h2>
	<h2><a <?php if ($page == 'about') { echo 'class="active"'; } ?> href="<?php echo $basepath; ?>/about">about</a> | </h2>
	<h2><a <?php if ($page == 'galleries') { echo 'class="active"'; } elseif ($section == 'galleries') { echo 'class="active"'; } ?> href="<?php echo $basepath; ?>/galleries">galleries</a> | </h2>
	<h2><a <?php if ($page == 'session') { echo 'class="active"'; } ?> href="<?php echo $basepath; ?>/session-prices">session prices</a> | </h2>
	<h2><a href="<?php echo $basepath; ?>/blog">blog</a> | </h2>
	<h2><a <?php if ($page == 'contact') { echo 'class="active"'; } ?> href="<?php echo $basepath; ?>/contact">contact</a> | </h2>
	<h2><a <?php if ($page == 'special') { echo 'class="active"'; } ?> href="<?php echo $basepath; ?>/special-thanks">special thanks</a></h2>
</div>