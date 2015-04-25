<?php
$url = 'http://localhost/planetcrm/modules/mqp_invoices/pdf/mqplanet.php?id='.$_GET['id'];
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
$result = curl_exec($ch);
curl_close($ch);
header('Cache-Control: public'); 
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="new.pdf"');
header('Content-Length: '.strlen($result));
echo $result;
?>