<?php 
include 'phpqrcode-master/qr/qrlib.php'; 
$text = "GEEKS FOR GEEKS"; 
QRcode::png($text); 
?> 
