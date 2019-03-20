<?php require('film-array.php') ;?>

<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Film Arkiv </title>
        <link rel="stylesheet" href="../css/stilark-oblig3.css">
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
                <a class="lenker" href="?film"> Vis alle </a>
                <?php
                    foreach($filmer as $key => $value)
                    { 
                        if(isset($_GET['film']) && $_GET['film'] == $key)
                        {
                            echo "<a class='lenker' href='?film=". $key. "'>" . $value['title'] ."</a>";
                        }
                        else
                        {
                            echo "<a class='lenker' href='?film=". $key. "'>" . $value['title'] ."</a>";
                        }
                    }
                ?>
            </div>
        </nav>

        <main>      
            <article>
                <?php
                    asort($filmer);
                    
                    if($_GET['film'])
                    {
                     echo   "<img class='image' src='". $filmer[$_GET['film']]['bilde'] ."' />
                            <h2>" . $filmer[$_GET['film']]['title'] . "</h2>
                            <p>" . $filmer[$_GET['film']]['skuspiller'] . "</p>
                            <p>" . $filmer[$_GET['film']]['beskrivelse'] . "</p>"; 

                            for($i=1; $i <=6; $i++) 
                            {                      
                                if($filmer[$_GET['film']]['terning'] == "../bilder/dice-".$i.".png")
                                {
                                    echo  "<img class='terning-kast' src='../bilder/dice-" . $i . ".png'>";
                                }
                                else
                                {
                                    echo "<img class='terning' src='../bilder/dice-" . $i . "-transparent.png'>";
                                }                
                            }
                        echo  "<a href='". $filmer[$_GET['film']]['link'] ."'> Les mer på IMDB </a>";
                    }
                    else
                    {  
                        echo   "<section id='main-section'>" ;                          
                        foreach($filmer as $key => $value)
                        {     
                        echo  "<div>";
                         echo    "<img class='image' src='". $value['bilde'] ."'/>
                                <h2 >" . $value['title']. "</h2>
                                <a href ='". $value['link']. "' > Les mer på IMDB </a>";
                               
                                echo  "<section>";
                                for($i=1; $i<=6; $i++)
                                {
                                    if($value['terning'] == "../bilder/dice-".$i.".png")
                                    {
                                        echo  "<img class='terning-kast' src='../bilder/dice-" . $i . ".png'>";
                                    }
                                    else{                                
                                        echo "<img class='terning' src='../bilder/dice-" . $i . "-transparent.png'>";                                     
                                    }
                                }
                                echo "</section>";
                         echo  "</div>";
                        } 
                        echo   "<section>" ;                          
                    }
                ?>
        
            </article> 
        </main>
        <footer>
            <p> &copy; Bereket G. Adhanom</p>
            <a href="mailto:bereketa@hiof.no"> E-post</a>
        </footer>     
    </body>
</html>


