<?php
$host='localhost';
$user='kossboss';
$pass='vWMASunD3nsBax8W';
$con=mysql_connect($host,$user,$pass);
$db='kossboss';
mysql_select_db($db);
$q1=$_GET['q'];
//echo "DUN DUN!" . $q1
//$result=mysql_query($query);
mysql_query($q1);
//log to file
//date_default_timezone_set('America/Los_Angeles');
// put timestamp in data
$File = "./slog/xraidlog.txt"; 
$Handle = fopen($File, 'a');
$d8 = date('m/d/Y h:i:s a', time());
$Data = $d8 ." - ". $q1 . "\n"; 
fwrite($Handle, $Data); 
// print "Data Written"; 
fclose($Handle);
//echo $Data;
mysql_close($con); 
?>
