<?php
	
	error_reporting(0);
	$error = false;
	
	if (isset($_GET['download'])) {
		$old_mask = umask(0);
		
		function download_file($remote, $local = null) {
			if (is_null($local)) {
				$local = basename($remote);
			}
			if (extension_loaded('curl')) {
				$cp = curl_init($remote);
				$fp = fopen($local, "w+");
				if (!$fp) {
					curl_close($cp);
					return false;
				} else {
					curl_setopt($cp, CURLOPT_FILE, $fp);
					curl_exec($cp);
					curl_close($cp);
					fclose($fp);
				}	
			} elseif (ini_get('allow_url_fopen')) {
				if (!copy($remote, $local)) {
					return false;
				}
			} else {
				$bits = explode('install.slideshowpro.net/', $remote);
				$relative_path = $bits[1];

				$headers = "GET /$relative_path HTTP/1.1\r\n";
				$headers .= "Host: install.slideshowpro.net\r\n";

				$socket = fsockopen('install.slideshowpro.net', 80, $errno, $errstr, 60);

				if ($socket) {
					fwrite($socket, $headers.$post."\r\nConnection: Close\r\n\r\n");
					$response = '';
					while (!feof($socket)) {
						$response .= fgets($socket, 1024);
					}
					$response = explode("\r\n\r\n", $response, 2);
					$response = $response[1];
					fclose($socket);
				} else {
					return false;
				}
			
				$fp = fopen($local, "w+");
				if (!$fp) {
					return false;
				} else {
					fwrite($fp, $response);
					fclose($fp);
				}
			}
			return true;
		}
	
		// Call back is called for each file extracted and we need to make sure
		// the permissions are the same as the parent folder.
		function extract_callback($p_event, &$p_header) {
			$current_dir = dirname(__FILE__);
			$current_perms = substr(sprintf('%o', fileperms($current_dir)), -4);
			chmod($current_dir . DIRECTORY_SEPARATOR . $p_header['filename'], octdec($current_perms));
			return 1;
		}
	
		$core =	'http://install.slideshowpro.net/zips/new.zip';
		$zip_helper = 'http://install.slideshowpro.net/zips/pclzip.lib.txt';
	
		if (download_file($core, 'install.zip') && download_file($zip_helper, 'pclzip.lib.php')) {
			require('pclzip.lib.php');

			rename('index.php', 'index.php.off');

			$archive = new PclZip('install.zip');
			$archive->extract(PCLZIP_CB_POST_EXTRACT, 'extract_callback');

			unlink('pclzip.lib.php');
			unlink('install.zip');;
			unlink('index.php.off');
		} else {
			$error = array('header' => 'Uh oh!', 'body' => "Director was not able to download the files it needs. Make sure this directory is writable by the web server and then click \"Try again\".", 'refresh' => false);
		}
		umask($old_mask);
		if (!$error) {
			die('ok');
		} else {
?>
<div id="alert">
	<div class="error">
		<div class="tr"></div>
		<div class="content">
			<div class="fixed icon">
				<strong><?php echo $error['header']; ?></strong>
			</div>
		</div>
		<div class="bl"><div class="br"></div></div>
	</div>
</div>

<p><?php echo $error['body']; ?></p>

<fieldset>
	<button id="the_button_error" class="primary_lg" onclick="go();">Try again</button>
</fieldset>
<?php
		exit;
		}
	} else {
		$current_dir = dirname(__FILE__);
		$writable = is_writable($current_dir);
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>SlideShowPro Director: Install</title>
<link rel="stylesheet" href="http://install.slideshowpro.net/style.css" type="text/css" />
<style type="text/css" media="screen">
	p.disclaimer {font-size:10px;padding:0 15px;}
	fieldset {text-align:right;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js"></script>
<script type="text/javascript" charset="utf-8">
	
	function go() {
		var btn = $('the_button');
		btn.addClassName('progress');
		btn.style.opacity = 0.5;
		btn.innerHTML = 'Downloading...';
		dl();
	}
	
	function dl() {
		var myAjax = new Ajax.Updater('error', 'index.php?download', { 
			method: 'get',
			evalScripts: true,
			onComplete: function() {
				var val = $('error').innerHTML;
				if (val == 'ok') {
					location.href = './';
				} else {
					$('error').show();
					$('welcome').hide();
				}
			}
		});
	}
</script>
</head>
<body id="login">
	
	<div id="dummy" style="display:none"></div>
	
	<div id="login-container">
		
		<div id="login-content" style="width:350px;">

			<div class="module">

				<div class="module-head">
					<h3><img src="http://install.slideshowpro.net/img/bg_module_head_logo.gif" /></h3>
				</div>

				<div class="wrap">
					
					<div class="content">
						
						<div id="error"<?php if ($writable): ?> style="display:none"<?php endif; ?>>
							<?php $current_dir = dirname(__FILE__);
							if (!$writable) {
							?>
							<div id="alert">
								<div class="error">
									<div class="tr"></div>
									<div class="content">
										<div class="fixed icon">
											<strong>Uh oh!</strong>
										</div>
									</div>
									<div class="bl"><div class="br"></div></div>
								</div>
							</div>

							<p>Before installing, Director needs to be able to write to this folder. Please change the permissions on this directory to allow the web server to write to it, then click "Try again".</p>

							<fieldset>
								<button id="the_button_error" class="primary_lg" onclick="location.href='./';">Try again</button>
							</fieldset>
							
							<?php
							} ?>
						</div>
						
						<div id="welcome"<?php if (!$writable): ?> style="display:none"<?php endif; ?>>
							<p>Welcome to SlideShowPro Director! Before installing, Director needs to download the files necessary for it to run on your server. To get started, click the button below.</p>
						
							<fieldset>
								<button id="the_button" class="primary_lg" onclick="go();">Start installation</button>
							</fieldset>
						</div>
					</div> <!--close content-->

				</div> <!--close module wrap-->

				<div class="module-footer">
					<div>&nbsp;</div>
				</div>

			</div> <!--close module-->
			
		</div> <!--close login-content-->
		
	</div> <!--close login-container-->
	
	<img src="http://install.slideshowpro.net/default/img/bttn_primary_lg_spin.gif" style="display:none" />
	
</body>
</html>