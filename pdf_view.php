<?php
$id = $_GET['id'];
$file = 'uploads/lecture/lec_'.$id.'.pdf';
$filename = 'lec_'.$id.'.pdf'; /* Note: Always use .pdf at the end. */

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);
?>