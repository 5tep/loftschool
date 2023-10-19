<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

include ('src/Tariffs.php');
include ('src/Services.php');


$baseTariff = new BaseTariff();
$hourlyTariff = new HourlyTariff();
$studentTariff = new StudentTariff();

$gpsService = new GPSService(); 
$additionalDriverService = new AdditionalDriverService();

$price1 = $baseTariff->calculatePrice(20.0, 90);
echo "Price for Base Tariff: $price1<br>";
$baseTariff->addService($gpsService);
$price1 = $baseTariff->calculatePrice(20.0, 90);
echo "Price for Base Tariff with gps: $price1<br>";

$price2 = $hourlyTariff->calculatePrice(10.0, 90);

$price3 = $studentTariff->calculatePrice(15.0, 60);

echo "Price for Hourly Tariff: $price2<br>";
echo "Price for Student Tariff: $price3<br>";

$studentTariff->addService($additionalDriverService);
$price3 = $studentTariff->calculatePrice(15.0, 60);
echo "Price for Student Tariff with driver: $price3<br>";
?>
