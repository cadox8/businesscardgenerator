<?php
    $image = $_POST['image'];
    $filedir = $_POST['filedir'];
    $name = uniqid();

    $image = str_replace('data:image/png;base64,', '', $image);
    $decoded = base64_decode($image);

    $path = $filedir . "/" . $name . ".png";
	$pathIMG = $name . ".png";
	
	file_put_contents($path, $decoded);
	echo '../cards_uploads/'.$pathIMG;


?> 