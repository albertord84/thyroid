<?php
// drvy
$folder_name=$GET["folder_name"];
$carpeta = 'banco/GroundTruth-edges/'.$folder_name;
$permitidos = array('mat');
$archivo_final = 'files.zip';  // .zip *
 
$zip = new ZipArchive();
if ($zip->open($archivo_final, ZIPARCHIVE::CREATE)==TRUE){
	if ($abrir = opendir($carpeta)) {
		while (false !== ($archivo = readdir($abrir))) {
			$extension = substr($archivo, strrpos($archivo, '.') + 1);
			if (in_array($extension, $permitidos)) {
				$zip->addFile($carpeta.$archivo,$archivo);
			}
		}
		closedir($abrir);
	} else {echo ' no se ha podido abrir la carpeta';}
} else {echo 'No se ha podido crear un archivo zip!';}
$zip->close();
echo 'Listo';
 
?>