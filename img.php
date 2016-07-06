<?php

	// created by RaiZeN
	// @xRaiZeN_ | /id/xRaiZeN | /u/MrRaiZeN

	// image 
	$img = ImageCreateFrompng('img/bg/'.$_GET['cat'].'/'.$_GET['bg'].'.png');
	
	// rgb colors
	$white = ImageColorAllocate($img, 255, 255, 255);

	// fonts 
	$font = "fonts/font.otf";
	
	// adding text (nickname)
	imagettftext($img, 10, 0, 235, 155, $white, $font, $_GET['nick']);
	
	// saving alpha and image
	imagesavealpha($img,true);
	header("Content-type: image/png");
	ImagePng($img);
?>
