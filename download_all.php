<?php       
    $download='banco/GroundTruth-edges/'.$_GET['file_name'].'.ZIP';
    header('Content-Type: application/zip');
    header("Content-Disposition: attachment; filename = $download");
    header('Content-Length: ' . filesize($download));
    header("Location: $download");
?>