<?php include_once("database.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="css/bootstrap-grid.css">
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/script.js" defer></script>
	<title>Guitars Online</title>
</head>
<body>
<?php include_once("header.php");?>


//TODO: Add some basic content for home page with links
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="i" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>

</body>
</html>