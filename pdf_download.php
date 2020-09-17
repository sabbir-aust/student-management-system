<?php
	$id = $_GET['id'];
	$file ='lec_'.$id.'.pdf' ;
    // Add a file type check here for security purposes so that nobody can-
    // download PHP files or other sensitive files from your server by spoofing this script
    header('Content-type: application/pdf');
    header('Content-Disposition: attachment; filename="'.$file.'"');
    readfile('uploads/lecture/'.$file);
    exit();
?>