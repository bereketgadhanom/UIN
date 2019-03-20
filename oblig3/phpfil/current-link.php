<?php 
    $visalle = "currentlink";
    $dangal = "currentlink";
    $drishyam = "currentlink";
    $vikram = "currentlink";

    $currentLinked = basename($_SERVER['PHP_SELF'], ".php");
    if ($currentLinked=="Dangal (2016)"){$dangal='current-link';}
    elseif ($currentLinked=="Drishyam (2013)"){$drishyam='current-link';}
    elseif ($currentLinked=="Vikram Vedha (2017)"){$vikram='current-link';}
    else {$visall='current-link';}
?>