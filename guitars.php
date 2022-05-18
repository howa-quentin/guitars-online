<?php 
include_once("database.php"); 
$select = $_POST['9'];
?>

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

	<div class="container" style="margin-top: 80px">
		<div class="row">
			<div class="col-sm">
			<a href="http://localhost:8888/guitars-online/guitarSelected.php">
			<img id="item1" src="img/fender-strat/strat1.jpeg" width="300px" height="300px"></a>
				<p>Fender American Professional II Stratocaster Rosewood Fingerboard Electric Guitar Dark Night</p>
			</div>
			<div class="col-sm">
			<a href="http://localhost:8888/guitars-online/guitarSelected.php">
				<img id="item2" src="img/epiphone-lesspual/lesspaul1.jpeg" width="300px" height="300px"></a>
				<p>Epiphone Les Paul Traditional Pro IV Limited-Edition Electric Guitar Worn Wine Red</p>
			</div>
			<div class="col-sm">
			<a href="http://localhost:8888/guitars-online/guitarSelected.php">
				<img id="item3" src="img/gibson-sg/sg1.jpeg" width="300px" height="300px"></a>
				<p>Gibson Custom SG Custom Electric Guitar Ebony</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
			<a href="http://localhost:8888/guitars-online/guitarSelected.php">
				<img id="item4" src="img/gibson-semi/semi1.jpeg" width="300px" height="300px"></a>
				<p>Gibson ES-335 Satin Semi-Hollow Electric Guitar Satin Vintage Burst</p>
			</div>
			<div class="col-sm">
			<a href="http://localhost:8888/guitars-online/guitarSelected.php">
				<img id="item5" src="img/squier-tele/tele1.jpeg" width="300px" height="300px"></a>
				<p>Squier Bullet Telecaster Limited Edition Electric Guitar Surf Green</p>
			</div>
			<div class="col-sm">
			<a href="http://localhost:8888/guitars-online/guitarSelected.php">
				<img id="item6" src="img/ibanez-steve/steve1.jpeg" width="300px" height="300px"></a>
				<p>Ibanez JEMJR Steve Vai Signature JEM Series Electric Guitar White</p>
			</div>
		</div>
	</div>



</body>
</html>