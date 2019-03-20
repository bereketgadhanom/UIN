<?php require('film-array.php') ;?>
<?php require('header-body.php'); ?>

        <main>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <select name="select">
                <option value="velg_film">Velg film her</option>
                <?php
                    foreach($filmer as $key => $value){ 
                        echo "<option value='". $value['title'] ."'>" . $value['title'] . "</option> \n";  
                    }
                 ?>
                </select> 
                <input type="submit" name="submit"  value="Vis film" />
            </form>
            <article>
                <?php              
                    if(!empty($_POST['select']) && isset($_POST['submit'])){  
                        
                        if($_POST['select'] == "Dangal (2016)"){
                        echo   "<img class='".image."' src='". $filmer['Dangal']['bilde'] . "'/> 
                                <h2>". $filmer['Dangal']['title'] . "</h2> <br>
                                <p>" . $filmer['Dangal']['skuspiller'] . "</p> <br> 
                                <p>" . $filmer['Dangal']['beskrivelse'] . "</p> 
                                <img  src='" . $filmer['Dangal']['terning'] . "'/> <br>
                                <a  href='". $filmer['Dangal']['link'] ."'> Les mer på IMDB </a>";
                        }             
                        elseif($_POST['select'] == "Drishyam (2013)"){
                        echo    "<img class='".image."' src='". $filmer['Drishyam']['bilde'] . "'/> 
                                <h2>". $filmer['Drishyam']['title'] . "</h2> <br>
                                <p>" . $filmer['Drishyam']['skuspiller'] . "</p> <br> 
                                <p>" . $filmer['Drishyam']['beskrivelse'] . "</p> 
                                <img src='" . $filmer['Drishyam']['terning'] . "'/>  <br>
                                <a href='". $filmer['Drishyam']['link'] ."'> Les mer på IMDB </a> <br> ";
                        }
                        elseif($_POST['select'] == "Vikram Vedha (2017)"){
                        echo   "<img class='".image."' src='". $filmer['Vikram']['bilde'] . "'/> 
                                <h2>". $filmer['Vikram']['title'] . "</h2> <br>
                                <p>" . $filmer['Vikram']['skuspiller'] . "</p> <br> 
                                <p>" . $filmer['Vikram']['beskrivelse'] . "</p>  
                                <img src='" . $filmer['Vikram']['terning'] . "'/><br> 
                                <a href='". $filmer['Vikram']['link'] ."'> Les mer på IMDB </a>";                                
                        }

                        else{
                            echo "";
                        }
                    }
                ?>
            </article>
        </main>

<?php require('footer-body.php'); ?>


