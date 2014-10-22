<?php


$filepath = $_POST["filepath"];
$file = fopen($filepath, "r");
$split = explode("/", $filepath);
$filename = end($split);
$tmppath = "./data/".$filename;
$tmpdirectory = fopen($tmppath, "a");


while (!feof($file)) {
	$ligne = fgets($file);
	$ligne = str_replace(";", ",", $ligne);
	fputs($tmpdirectory, $ligne);
}

fclose($tmpdirectory);
fclose($file);

$_SESSION["rand"] = "true";
header('Location: index.php');

?>