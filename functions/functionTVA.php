<?php


/**
 * calcul prix ttc.
 *
 * @param  float $ht
 * @param  float $tva
 * @return float
 */
function ttc($ht,$tva){
    return ($ht+($ht*($tva/100)));
};


?>