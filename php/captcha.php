<?php 
session_start();

$string ='';
for($i=0; $i<7; $i++)
{
	$string .= chr(rand(97,122));
}
$_SESSION['captcha'] = $string;

$font_path = 'fonts/';

$captcha_image = imagecreatetruecolor(150,60);
$text_color = imagecolorallocate($captcha_image, 200,100,90);
$bg_color = imagecolorallocate($captcha_image, 255,255,255);

imagefilledrectangle($captcha_image,0,0,399,99,$bg_color);
imagettftext($captcha_image,30,0,10,40,$text_color,$font_path."ITCBLKAD.TTF", $_SESSION['captcha']);

header("Content-type: image/png");
imagepng($captcha_image);
?>
