


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chart Viewer</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<?php
	$everyChart = array("BarChart", "DonutChart");
	?>

  	Choix d'un fichier .csv, .xlsx ou .xls
	<form>
		<input id="fileSelect" type="file" accept=".csv, .xlsx, .xls" name="chartfile"></br>
		<input type="submit" value="Selectionner">
	</form>
	<?php
	
	foreach($everyChart as $chart){
	?>
		<a class="btn btn-default" href=<?php echo dirname($_SERVER["PHP_SELF"]) . '/chart/' . $chart . '/index.html'; ?>><?php echo $chart; ?></a>
	<?php
	}

	?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>