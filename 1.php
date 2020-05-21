<?php 


include 'phpqrcode-master/qr/qrlib.php'; 

// $text variable has data for QR 
$text = "GEEKS FOR GEEKS"; 

QRcode::png($text); 
?> 
