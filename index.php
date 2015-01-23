<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);


$url = 'https://api.screenleap.com/v2/screen-shares'; 
$ch = curl_init($url); curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('authtoken:zVrnPbcuHu'));
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'accountid=mijat2'); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
  // Whether you need the following line depends on your curl configuration. 
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
  $screenShareData = curl_exec($ch); 
  curl_close($ch);
print_r($screenShareData);
 ?>

 
</body>
</html>

curl -H "accountid:mijat2" -H "authtoken:zVrnPbcuHu" -X POST  https://api.screenleap.com/v2/screen-shares