<?php

	$section='galleries';
	$page='families';

?>
<?php require('../header.php') ?>
	<div id="wrapper-top"></div>	
		<div id="content">
			<div id="sub-content">
				<h2><a class="go-back" href="../galleries">galleries</a> - families</h2>
				
				<div id="gallery-container">
				
					<!-- START EMBED CODE -->

					<script type="text/javascript" src="http://www.angelabeaulieuphoto.com/slideshowpro/m/embed.js"></script>

					<div id="album-12">

					</div>

					<script type="text/javascript">
						SlideShowPro({
							attributes: {
								id: "album-12",
								width: 800,
								height: 563
							},
							mobile: {
								auto: false,
								poster: "vignette"
							},
							params: {
								bgcolor: "#000000",
								allowfullscreen: true
							},
							flashvars: {
								xmlFilePath: "http://www.angelabeaulieuphoto.com/slideshowpro/images.php?album=12",
								paramXMLPath: "http://www.angelabeaulieuphoto.com/slideshowpro/m/params/ice.xml",
								feedbackPreloaderAppearance: "Line",
								contentScale: "Proportional"
							}
						});
					</script>

					<!-- END EMBED CODE -->
				
				</div>
				
			</div>
		</div>
	<?php require('../nav.php') ?>
	<div id="wrapper-bottom"></div>
<?php require('../footer.php') ?>