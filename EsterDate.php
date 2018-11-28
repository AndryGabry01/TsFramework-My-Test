<?php
//find easter date
//variable
$anno="inser year for search easter date"

//function 
function easter($year, $format = 'd.m.Y') {
    $easter = new DateTime('@' . easter_date($year));
    // if your timezone is already correct, the following line can be removed
    $easter->setTimezone(new DateTimeZone('Europe/Berlin'));
    return $easter->format($format);
}

$dpas=easter($anno,'d'); //giorno pasqua
$mpas=easter($anno,'m'); //mese pasqua

echo $dpas;
echo $mpas;
?>
