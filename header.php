<?php 
// Copyright (c) 2009-2011 Ryan Ours. www.ryanours.com
// Header generator for angelabeaulieuphoto.com

$uri_path = $_SERVER['SERVER_NAME'];
if ($uri_path == 'dev.rynoceris.com'){
	$uri_path = $uri_path.'/angelabeaulieuphoto.com';
}
$basepath = 'http://'.$uri_path;
$imagepath = $basepath.'/images/';

// variables passed in to handle navigation display
// $page



// -----------------------------------------------------------------------------

$sectiontitle = array(
	'home' => 'Home',
	'about' => 'About',
	'session' => 'Session Prices',
	'special' => 'Special Thanks',
	'galleries' => 'Galleries',
	'automotive' => 'Automotive',
	'animals' => 'Animals',
	'family-sessions' => 'Family Sessions',
	'maternity' => 'Maternity',
	'nature-landscape' => 'Nature and Landscape',
	'couples' => 'Couples',
	'engagement' => 'Engagement',
	'kids-infants' => 'Kids and Infants',
	'models' => 'Models',
	'people-and-portraits' => 'People and Portraits',
	'showers-and-parties' => 'Showers and Parties',
	'weddings' => 'Weddings',
	'contact' => 'Contact'
);

$description = array(
	'home' => '"Welcome to Angela Beaulieu Photography!"',
	'about' => '"About Angela Beaulieu Photography."',
	'session' => '"Learn about Angela Beaulieu Photography session prices here."',
	'special' => '"Angela Beaulieu would like to give a special thanks to the following people."',
	'galleries' => '"These are the galleries for Angela Beaulieu Photography."',
	'automotive' => '"Welcome to the automotive gallery at Angela Beaulieu Photography."',
	'animals' => '"Welcome to the animals gallery at Angela Beaulieu Photography."',
	'family-sessions' => '"Welcome to the family sessions gallery at Angela Beaulieu Photography."',
	'maternity' => '"Welcome to the maternity gallery at Angela Beaulieu Photography."',
	'nature-landscape' => '"Welcome to the nature and landscape gallery at Angela Beaulieu Photography."',
	'couples' => '"Welcome to the couples gallery at Angela Beaulieu Photography."',
	'engagement' => '"Welcome to the engagement gallery at Angela Beaulieu Photography."',
	'kids-infants' => '"Welcome to the kids and infants gallery at Angela Beaulieu Photography."',
	'models' => '"Welcome to the models gallery at Angela Beaulieu Photography."',
	'people-and-portraits' => '"Welcome to the people and portraits gallery at Angela Beaulieu Photography."',
	'showers-and-parties' => '"Welcome to the showers and parties gallery at Angela Beaulieu Photography."',
	'weddings' => '"Welcome to the weddings gallery at Angela Beaulieu Photography."',
	'contact' => '"Contact Angela Beaulieu Photography today to schedule your next photo shoot!"'
);

$keywords = array(
	'home' => '"angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'about' => '"about photography, about angela beaulieu, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'session' => '"session prices, photo prices, photography pricing, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'special' => '"special thanks, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'galleries' => '"photo gallery, photo galleries, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'automotive' => '"cars, automotive, automotive photography, photo gallery, photo galleries, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'animals' => '"animals, pets, pet photo, animal photography, photographer, photo gallery, photo galleries, angela beaulieu, photography, photo, photos, glamour shots, models, professional photography"',
	'family-sessions' => '"family portraits, family photo, family session, family pictures, photographer, photo gallery, photo galleries, angela beaulieu, photography, photo, photos, glamour shots, models, professional photography"',
	'maternity' => '"maternity, maternity photography, maternitry photographer, maternity shoot, photographer, photo gallery, photo galleries, angela beaulieu, photography, photo, photos, glamour shots, models, professional photography"',
	'nature-landscape' => '"nature and landscape photography, nature, landscape, nature and landscape, photographer, photo gallery, photo galleries, angela beaulieu, photography, photo, photos, glamour shots, models, professional photography"',
	'couples' => '"couple, couples, couples photos, couples photography, photo gallery, photo galleries, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'engagement' => '"engagement, engagement pictures, engagement photographer, photographer, photo gallery, photo galleries, angela beaulieu, photography, photo, photos, glamour shots, models, professional photography"',
	'kids-infants' => '"chilren, kids pictures, kids photos, infant pictures, infant photos, photo galleries, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'models' => '"models, sexy models, modeling, glamour, fashion, photo shoot, bikini, bikini pictures, bikini photos, photo gallery, photo galleries, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'people-and-portraits' => '"people and portraits, portrait, portraits, photo galleries, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"',
	'showers-and-parties' => '"showers and parties, shower pictures, wedding shower, party pictures, party photographer, wedding photographer, wedding shower photographer, shower, party, photographer, photo gallery, photo galleries, angela beaulieu, photography, photo, photos, glamour shots, models, professional photography"',
	'weddings' => '"wedding, wedding pictures, wedding photographer, photographer, photo gallery, photo galleries, angela beaulieu, photography, photo, photos, glamour shots, models, professional photography"',
	'contact' => '"contact, angela beaulieu, photographer, photography, photo, photos, glamour shots, models, professional photography"'
);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Angela Beaulieu Photography - <?php echo ($sectiontitle["$page"]) ?></title>
	<meta name="description" content=<?php echo ($description["$page"]) ?> />
	<meta name="keywords" content=<?php echo ($keywords["$page"]) ?> />
	<link rel="icon" type="image/png" href="<?php echo $basepath; ?>/favicon.png" />
	<link href="<?php echo $basepath; ?>/master.css" rel="stylesheet" type="text/css" media="projection,screen" />
	<script type="text/javascript" src="<?php echo $basepath; ?>/jquery-1.3.2.min.js"></script>
	<script src="<?php echo $basepath; ?>/validate.js" type="text/javascript" charset="utf-8"></script>
	
</head>
<body id="<?php $body_id = str_replace(' ','-', $sectiontitle["$section"]); echo strtolower($body_id).'-page'; ?>" class="<?php $body_class = str_replace(' ','-', $sectiontitle["$page"]); echo strtolower($body_class); ?>">
<div id="main">
	<div id="header"><a href="<?php echo $basepath; ?>"><img class="logo" src="<?php echo $imagepath; ?>ab-logo-new-56x56.png" alt="" /></a>
		<div id="sub-header"><h1><a href="<?php echo $basepath; ?>">angela beaulieu</a></h1><h2><a href="<?php echo $basepath; ?>">PHOTOGRAPHY</a></h2></div>
	</div>