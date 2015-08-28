<!DOCTYPE HTML>
<!--Sonya Fucci & Natalia Carvajal GWC 2015 @AppNexus-->
<html>
	<head>
	<!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
			<!-- Compiled and minified CSS -->
			<script src="https://apis.google.com/js/platform.js" async defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
			<title>GreeNotes: The Online Textbook Editor</title>
	<script>
		function printPage()
		{
			window.print();
		}
	</script>
	</head>
	<body>

	<button class = "waves-effect waves-light btn green accent-3" onclick = "printPage();">Print this page
	</button>
	<?php
		$imgVal = $_POST['img_name'];
		$notesVal = $_POST['notes_name'];
		echo '<img src="'.$imgVal.'" />';
		echo '<img src="'.$notesVal.'" />';
	?>
	
		<div id = "diiv" class="g-savetodrive"
		   data-src= 
		   data-filename= "myEditedDocument.jpg"
		   data-sitename="greeNotes">
		</div>
		<script>
		document.getElementById("diiv").setAttribute("data-src", document.images[0]['src']);
	</script>
	</body>
</html>