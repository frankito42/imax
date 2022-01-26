<?php
header("Content-Type: image/png");
$im = @imagecreate(160, 30);
$color_fondo = imagecolorallocate($im, 0, 153, 255);
$color_texto = imagecolorallocate($im, 255, 255, 255);
imagestring($im, 10, 5, 5, "M", $color_texto);
imagejpeg($im);
imagedestroy($im);
?>