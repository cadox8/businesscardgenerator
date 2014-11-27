<?php
$path =  $_GET['img'];

header('Content-Type: image/png');
header('Content-Disposition: attachment; filename="firma.png"');
readfile($path);
?>