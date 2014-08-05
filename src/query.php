<?php
$host='localhost';
//$user='kossboss';
$user='xraid';
//$pass below is fake
$pass='123456';
$con=mysql_connect($host,$user,$pass);
//$db='kossboss';
$db='xraid';
$ip=$_SERVER["REMOTE_ADDR"];
mysql_select_db($db);
$q1=$_GET['q'] . "'" . $ip . "')";
mysql_query($q1);
$File = "./slog/xraidlog.txt"; 
$Handle = fopen($File, 'a');
$d8 = date('m/d/Y h:i:s a', time());
$Data = $d8 . " - " . $q1 . "\n"; 
fwrite($Handle, $Data); 
fclose($Handle);
mysql_close($con); 
?>
