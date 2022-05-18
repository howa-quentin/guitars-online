<?php include_once("database.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="css/bootstrap-grid.css">
	<script src="js/bootstrap.bundle.js" defer></script>
	<script src="js/script.js" defer></script>
	<title>Guitars Online</title>
</head>
<body>
    <?php include_once("header.php");?>
    
    <style>
        .carousel-item {
            height: 32rem;
            background: #777;
            color: white;
            position: relative;
        }

        .container {
            position: absolute;
            padding-bottom: 50px;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>

    <div id="guitarCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#guitarCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#guitarCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#guitarCarousel" data-bs-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <img src="" alt="">
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <img src="" alt="">
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <img src="" alt="">
                </div>
            </div>
            <a href="#guitarCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
                <span class="sr-only"></span>
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a href="#guitarCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
                <span class="sr-only"></span>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>

</body>
</html>