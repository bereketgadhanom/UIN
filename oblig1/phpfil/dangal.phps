<?php require("header-body.php"); ?>
    <main>
        <article>  
            <?php
                $filmer = array(
                    "dangal" => array( 
                        "bilde" => "../bilder/dangal.jpg",
                        "title" => "Dangal (2016)",
                        "beskrivelse" => "Former wrestler Mahavir Singh Phogat and his two wrestler daughters struggle towards glory at the Commonwealth Games in the face of societal oppression.",
                        "link" => "https://www.imdb.com/title/tt5074352/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=690bec67-3bd7-45a1-9ab4-4f274a72e602&pf_rd_r=GRDAR6F8WMCB5JK042VZ&pf_rd_s=center-4&pf_rd_t=60601&pf_rd_i=india.top-rated-indian-movies&ref_=fea_india_ss_toprated_tt_11",
                        "skuspiller" => "Mahavir Singh Phogat"
                    ),
                );
            ?>         
            <img src="<?php echo $filmer[$_GET['film']]['bilde'];?>" />
            <h2><?php echo $filmer[$_GET['film']]['title'];?></h2>
            <p><?php echo $filmer[$_GET['film']]['beskrivelse'];?></p>
            <p><?php echo $filmer[$_GET['film']]['skuspiller'];?></p>
            <a href ="<?php echo $filmer[$_GET['film']]['link']; ?>" > Les mer på IMDB </a>
        </article>
    </main>
<?php require("footer-body.php"); ?>
