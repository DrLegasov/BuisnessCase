<?php


/**
 * ShippingCosts calc
 *
 * @param  float $TotalOrderAmount
 * @return float
 */
function ShippingCosts($TotalOrderAmount){

$ShippingCosts = $TotalOrderAmount*0.15;

if($ShippingCosts>30) {
    $ShippingCosts = 0;   
} return $ShippingCosts;
}

?>