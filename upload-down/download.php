<?php
$fullPath = 'upload/'.$_GET['id'];
  header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$fullPath");
header("Content-Type: mime/type");
header("Content-Transfer-Encoding: binary");
// UPDATE: Add the below line to show file size during download.
header('Content-Length: ' . filesize($fullPath));

readfile($fullPath);

?>