<?php 
include "includes/vars.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf=8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$title;?></title>

	<!--Main CSS File-->
	<link rel="stylesheet" type="text/css" href="stylesheets/css/style.css">

	<!-- Icon Fonts-->
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<!--Grid System-->
	<link rel="stylesheet" type="text/css" href="stylesheets/css/grid.css">

	<!--Css Animations-->
	<link rel="stylesheet" type="text/css" href="stylesheets/css/animate.css">
</head>
<body>

<?
	include "includes/header.php"; //Header section


	include "includes/content.php"; //Content section


	include "includes/footer.php"; //Footer section
 ?>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<!--Scripts-->
<script src="js/jquery-3.1.1.js"></script>
<script src="js/app.js"></script>
</body>
</html>