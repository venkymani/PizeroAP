<style>#parent {
   display: table;
   width: 100%;
}
#form_login {
    left      : 50%;
    top       : 50%;
    position  : absolute;
    transform : translate(-50%, -50%);
}
</style>


<link rel="stylesheet" href="ssidconfig.css">
<body>
<div id="parent">
<div class="form">
    <form id="form_login" action="/ssidset.php" method="post">
<?php

if(isset($_GET["msg"]))
{
echo "<span style='color:red;'>".$_GET["msg"]."</span><br/><br/>";
}

?>
<h1>Enter SSID details</h1>
     
  <label for="country">Country Code:</label><br>
  <input type="text" id="cntry" name="cntry" suggested="US"><br>
  <label for="ssid">SSID:</label><br>
  <input type="text" id="ssid" name="ssid" value=""><br><br>
 <label for="wpapass">Password:</label><br>
  <input type="password" id="wpapass" name="wpapass" value=""><br><br>
  <input type="submit" value="Submit">
</form>

</div>
</div>
</body>
<?php
//$myfile = fopen("wpa_supplicant.conf", "r") or die("ok".error_get_last());
//$ret= fread($myfile,filesize("wpa_supplicant.conf"));
//var_dump($ret);
//echo "ok";
//fclose($myfile);


?>
