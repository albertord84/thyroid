

<?php	
    $path='banco/GroundTruth-edges/';
    $file_name=$_GET['file_name'];    
    $file=$path.$file_name;
    if(file_exists($file)) {
           $zip = new ZipArchive;
           $download = $file.'.zip';
           touch($download); 
           if($zip->open($download, ZipArchive::CREATE)!=TRUE) die('N�o foi poss�vel criar um arquivo ZIP!');
           else{
                   foreach (glob($file."/*.*") as $file) 		
                        $zip->addFile($file);
                }
            $zip->close();
            header('Content-Type: application/zip');
            header("Content-Disposition: attachment; filename = $download");
            header('Content-Length: ' . filesize($download));
            header("Location: $download");
        }
    else
            echo 'Diret�rio n�o encontrado';
		
   
?>