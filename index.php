<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Zenweshare</title>
	<link rel="stylesheet" type="text/css" href="css/imgareaselect-animated.css" />
	<!-- scripts -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<div class="wrap">
	<!-- preview area-->
	<img id="uploadPreview" style="display:none;"/>
	
	<!-- formulaire d'upload ! -->
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input id="uploadImage" type="file" accept="image/jpeg" name="image" />
		<input type="submit" value="Upload">

		<!-- les variables cachées  -->
		<input type="hidden" id="x" name="x" />
		<input type="hidden" id="y" name="y" />
		<input type="hidden" id="w" name="w" />
		<input type="hidden" id="h" name="h" />
	</form>
	
</div>
</body>
</html>