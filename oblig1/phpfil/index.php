
<?php require("header-body.php"); ?>
    <main>
        <article>    
            <?php
                  if($_GET['film']['dangal']){
                     include("dangal.php");
                  } 
                  elseif($_GET['film']['drishyam']){
                     include("drishyam.php");
                  }

                  elseif($_GET['film']['vikram']){
                     include("vikram.php");
                  }
                  else {
                     echo "<h2> Velg film over </h2> ";
                  }
            ?> 
         </article>
    </main>
 <?php require("footer-body.php"); ?>