<?php

$content="country=".$_POST["cntry"]."\r\n";

$content.="ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev"."\r\n";
$content.="update_config=1"."\r\n";
$content.="network={"."\r\n";
$content.="    ssid=\"".$_POST["ssid"]."\"\r\n";
$content.="    psk=\"".$_POST["wpapass"]."\"\r\n";
$content.="}";
$file=fopen('wpa_supplicant.conf','w+');
unlink($file);
file_put_contents('wpa_supplicant.conf', $content);

$url="ssidconfig.php?msg=Your new SSID has been set.Please reboot your Pi";
header( "Location: $url" );


?>
