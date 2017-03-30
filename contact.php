<!DOCTYPE html>
<html>
<head>
	<?php
		$title="Pink.com/Contact";
		require_once "blocks/head.php";
	  ?>
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" type="text/css" href="css/style_contact.css">
	  <script type="text/javascript">
	  	$(document).ready (function () {
	  		$("#done").click(function () {
	  			var name = $("#name").val ();
	  			var email = $("#email").val ();
	  			var subject = $("#subject").val ();
	  			var message = $("#message").val ();
	  			var error = "";
	  			if (name.length < 3) error = "Name is too short";
	  			else if (email.split ('@').length - 1 == 0 || email.split ('.').length -1 == 0) error = "Incorrect email";
	  			
	  			else if (message.length < 10)
	  				error = "Message is to short";
	  			if (error != "")
	  			{
	  				$('#messageShow').html (error + "<div class='clear'></br></div>");
	  				$('#messageShow').show ();
	  				return false;
	  			}
	  			$.ajax({
	  				url: 'ajax/ajax.php',
	  				type: 'POST',
	  				cache: false,
	  				data:{'name':name,'email':email,'subject':subject,'message':message},
	  				dataType:'html',
	  				success:function (data){
	  					if (data == 'Sent')
	  					{
	  						$('#messageShow').html (data + "<div class='clear'></br></div>");
	  						$('#messageShow').show ();
	  					}
	  				}

	  			});
	  		});
	  	});
	  </script>
	   <?php require_once "media/media.php";  ?>
</head>
<body>
<div class="wrapper">
	<?php require_once "blocks/header.php" ?>
	<div class="center-contact">
		<div class="in-center-contact">
			<div class="in-center-contact-top">
				<h1>You can use call back here!</h1></br>
				<p>gsd avfs fgvfgfd rgdr gernf gef nid srfbgrsb fgsdav fsfg vfgfdrgdrg r nfgefnid srfbgrs bfk srfrdggs da vfsfg vfgfdr gdrger nfgefni dsrfb grsbfk srfrdg srfr dg</p>
			</div>
			<div class="in-center-contact-bot">
				<form>
					<div id="messageShow"></div>
					<input type="text" placeholder="Name" name="name" id="name">
					<input type="text" placeholder="Email" name="email" id="email">
					<input type="text" placeholder="Subject" name="subject" id="subject">
					<textarea name="message" id="message" placeholder="Write your message here..."></textarea>
					<input type="button" name="done" id="done" value="Send">
				</form>
			</div>
		</div>
	</div>
	<?php require_once "blocks/footer.php" ?>
</div>
</body>
</html>