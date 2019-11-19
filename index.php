<?php
require 'Speedometer.php';

$speedKm = 10;
echo $speedKm . ' km correspondent à ' . Speedometer::convertKmToMiles($speedKm) . ' miles.';
echo '<br />';
echo '<br />';

$speedMiles = 20;
echo $speedMiles . ' miles correspondent à ' . Speedometer::convertMilesToKm($speedMiles) . ' km.';
echo '<br />';






