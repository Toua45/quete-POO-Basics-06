<?php
require 'Speedometer.php';

$valueKm = 10;
echo $valueKm . ' km correspondent à ' . Speedometer::convertKmToMiles($valueKm) . ' miles.';
echo '<br />';
echo '<br />';

$valueMiles = 20;
echo $valueMiles . ' miles correspondent à ' . Speedometer::convertMilesToKm($valueMiles) . ' km.';
echo '<br />';






