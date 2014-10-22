


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
			<form id="fileform" class="border-block" action="" method="POST">
				Choix d'un fichier .csv ou .xls</br>
				<input id="fileSelect" type="file" accept=".csv, .xls" name="filepath"></br></br>
				<button id="button-form-csv" class="btn btn-primary" style="display:none">CSVtoCSV</button>
				<button id="button-form-excel" class="btn btn-primary" style="display:none">EXCELtoCSV</button>
				
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
<script>
$("document").ready(function(){
	$("#fileSelect").change(function(){
		$("#button-form-csv").css("display", "block");
		$("#button-form-excel").css("display", "block");
	});
	$("#button-form-csv").click(function(){
		//var inputfile = $("#fileSelect").val();
		$("#fileform").attr("action", "convertisseurCSV.php")
		$("#fileform").submit();
		
		//inputfile = $.html("<?php echo trim("+inputfile+", 'fakepath'); ?>");
		//alert("It works ! inputfile = "+inputfile);
		
		//$("#applicationjava").html("<?php exec('java java/Convertisseur "+inputfile+"'); ?>");

	});
	$("#button-form-excel").click(function(){
		$("#fileform").attr("action", "convertisseurExcel.php")
		$("#fileform").submit();
	});

})
</script>


</body>
</html>