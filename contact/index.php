<?php

	$section='contact';
	$page='contact';

?>
<?php require('../header.php') ?>
	<div id="content">
	<h2>Contact Me</h2>
	
			<?php 
	$send = true;
	$messageValid = true;
	$fromNameValid = true;
	$fromEmailValid = true;
	
	function check_email_address($email) {
	  // First, we check that there's one @ symbol, and that the lengths are right
	  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
	    // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
	    return false;
	  }
	  // Split it into sections to make life easier
	  $email_array = explode("@", $email);
	  $local_array = explode(".", $email_array[0]);
	  for ($i = 0; $i < sizeof($local_array); $i++) {
	     if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
	      return false;
	    }
	  }  
	  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
	    $domain_array = explode(".", $email_array[1]);
	    if (sizeof($domain_array) < 2) {
	        return false; // Not enough parts to domain
	    }
	    for ($i = 0; $i < sizeof($domain_array); $i++) {
	      if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
	        return false;
	      }
	    }
	  }
	  return true;
	}
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$to = "info@angelabeaulieuphoto.com";
		$yoursubject = $_POST['yoursubject'];
		$fromName = $_POST['yourname'];
		$subject = "Inquiry from $fromName Re:$yoursubject";
		
		$message = $_POST['yourmessage'];
		if (ereg("/\w+/", $message)) {
			$send = false;
			$messageValid = false;
		}
		
		$fromEmail = $_POST['youremail'];
		if (check_email_address($fromEmail)) { 
			$headers = "From: $fromEmail";
		}
		else {
			$send = false;
			$fromEmailValid = false;
		}
		
		if ($send) {
			//All checked valid
			$sent = mail($to,$subject,$message,$headers);
			?>
		<p class="success">Thank you for your message! I'll be in touch soon!</p>
		<?
		}
		/*else { //For Debugging
			if (!$messageValid) { echo 'message invalid'; }
			if (!$fromNameValid) { echo 'from name invalid'; }
			if (!$fromEmailValid) { echo 'from email invalid'; }
		}*/
		
	}
?>
	
	<p>Thank you for visiting my site! If you have any inquiries, comments or just want to get in touch, please use the form here. I strive to answer all emails within 24 hours of receiving them. You may also email me <a href="mailto:info@angelabeaulieuphoto.com">directly</a> if you'd like.</p>
	
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 10,
  interval: 4000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#2a2a2a',
      color: '#ffffff'
    },
    tweets: {
      background: '#2a2a2a',
      color: '#cccccc',
      links: '#c94185'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: false,
    timestamp: true,
    avatars: false,
    behavior: 'default'
  }
}).render().setUser('angbphotography').start();
</script>

<form action="#" method="post" accept-charset="utf-8" class="validate">
			<fieldset>
				<label for="yourname">Name:</label>
				<input type="text" name="yourname" id="yourname" class="textbox personname validate"/>
			</fieldset>
			<fieldset>
				<label for="youremail">Email:</label>
				<input type="text" name="youremail" id="youremail" class="textbox email validate"/>
			</fieldset>
			<fieldset>
				<label for="yoursubject">Subject:</label>
			<input type="text" name="yoursubject" id="yoursubject" />
			</fieldset>
	<fieldset class="message">
				<label for="yourmessage">Message:</label>
				<textarea name="yourmessage" rows="20" cols="60" id="yourmessage" class="validate"></textarea>
	</fieldset>
	<fieldset>
	<label for="submitter" class="submitter">Submit</label>
				<input type="submit" value="Send Email" name="submitter" id="submitter"/>
	</fieldset>
  </form>
	</div>
<?php require('../footer.php') ?>