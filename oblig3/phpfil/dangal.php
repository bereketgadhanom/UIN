    
    
    <img src="<?php echo $filmer[$_GET['film']]['bilde'];?>" />
    <h2><?php echo $filmer[$_GET['film']]['title'];?></h2>
    <p><?php echo $filmer[$_GET['film']]['beskrivelse'];?></p>
    <p><?php echo $filmer[$_GET['film']]['skuspiller'];?></p>
    <img src="<?php echo $filmer[$_GET['film']]['terning'] ;?>" />
    <a href ="<?php echo $filmer[$_GET['film']]['link']; ?>" > Les mer på IMDB </a>