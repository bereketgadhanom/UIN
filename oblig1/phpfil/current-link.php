<?php 
    $dangal = "currentlink";
    $drishyam = "currentlink";
    $vikram = "currentlink";

    $currentLinked = basename($_SERVER['PHP_SELF'], ".php");
    if($currentLinked=="dangal"){$dangal='current-link';}
    elseif($currentLinked=="drishyam"){$drishyam='current-link';}
    elseif($currentLinked=="vikram"){$vikram='current-link';}
?>