


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chart Viewer</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
	$DOSSIERDIAGRAMME = "chart";

	if($dossier=opendir('./'.$DOSSIERDIAGRAMME)){
	?>

		<div class="container main-block">
			<form class="border-block">
				Choix d'un fichier .csv, .xlsx ou .xls
				<input id="fileSelect" type="file" accept=".csv, .xlsx, .xls" name="chartfile"></br>
				<input type="submit" value="Selectionner">
			</form>
			<div class="border-block">
				<?php
				while(false !=($listechart = readdir($dossier))){
					if($listechart != '.' && $listechart != '..'){
						echo "<a class='btn btn-default' href='./".$DOSSIERDIAGRAMME."/".$listechart."'>".$listechart."</a>";
					}
				}
				?>
			</div>
			</div>
		<?php
	}
	else{
		echo "Dossier chart inexistant";
	}
	?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>