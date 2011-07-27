<?php
/**
 * @package WordPress
 * @subpackage Angela_Beaulieu_Theme
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" type="image/png" href="http://www.angelabeaulieuphoto.com/favicon.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="http://www.angelabeaulieuphoto.com/master.css" rel="stylesheet" type="text/css" media="projection,screen" />
	<script type="text/javascript" src="http://www.angelabeaulieuphoto.com/jquery-1.3.2.min.js"></script>
	<script src="http://www.angelabeaulieuphoto.com/validate.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="http://www.angelabeaulieuphoto.com/cufon-yui.js"></script>
	<script type="text/javascript" src="http://www.angelabeaulieuphoto.com/Prelo_Slab_Medium_400-Prelo_Slab_Bold_400.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1, input#submitter, h2, .post h3, h3#comments, #respond h3', {
			hover: true
		});
	</script>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
</head>
<body id="blog" <?php body_class(); ?>>
<div id="main">
	<div id="header"><a href="http://www.angelabeaulieuphoto.com"><img class="logo" src="http://www.angelabeaulieuphoto.com/images/ab-logo-pink.png" alt="" /></a><h1><a href="http://www.angelabeaulieuphoto.com">Angela Beaulieu Photography</a></h1></div>