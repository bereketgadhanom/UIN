<?php include('current-link.php'); ?>
<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Film Arkiv </title>
        <link rel="stylesheet" href="../css/stilark-oblig2.css">
        <?php include('metadata.php'); ?> <br>
    </head>
    <body>
        <header>
           <h1> Film Arkiv </h1> 
        </header>
        <nav>
            <label for="toggle"> &#9776; </label>
            <input type="checkbox" id="toggle"   />
            <div class="navbar">
                <a class="currentlink" href="../../oblig1/phpfil/index.php"> Oblig-1 </a>
                <a class="currentlink" href="index.php"> Oblig-2 </a>
                <a class="currentlink" href="../../oblig3/phpfil/index.php"> Oblig-3 </a>
                <a class="currentlink" href="https://itstud.hiof.no/~bereketa/webutvikling/oblig5/html/"> Web-utvikling </a>
            </div>
        </nav>
    