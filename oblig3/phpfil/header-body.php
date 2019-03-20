 
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
                <a class="currentlink" href="?film"> Vis alle </a>
                <a class="currentlink" href="?film=Dangal"> Dangal </a>
                <a class="currentlink" href="?film=Drishyam"> Drishyam </a>
                <a class="currentlink" href="?film=Vikram"> Vikram </a>
            </div>
        </nav>
    