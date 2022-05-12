<?php include_once("database.php"); ?>

<?php 
$conn = new mysqli("localhost", "root", "", "catalog") or die("Unable to connect");
if($conn) echo "Connected!"
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

<div class="container">
    <div class="row">
        <div class="col">
            <img id="guitar1" src="" class="img-fluid">
        </div>
    </div>
  
  </div>
</div>
</div>


</body>
</html>