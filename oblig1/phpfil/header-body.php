<?php include('current-link.php'); ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/stilark-oblig1.css"/>
    <title>Film arkiv</title>
</head>
<body>
    <div id="bg"></div>
    <header>
        <h1> Film arkiv </h1>
    </header>    
    <nav>
        <a class="<?php echo $dangal; ?>" href="dangal.php?film=dangal"> Dangal </a>
        <a class="<?php echo $drishyam; ?>" href="drishyam.php?film=drishyam"> Drishyam</a>
        <a class="<?php echo $vikram; ?>" href="vikram.php?film=vikram"> Vikram Vedha </a>  
    </nav>