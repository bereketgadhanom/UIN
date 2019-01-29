<?php require("header-body.php"); ?>
    <main>
        <article>  
            <?php
                $filmer = array(
                    "drishyam" => array( 
                        "bilde" => "../bilder/drishyam.jpg",
                        "title" => "Drishyam (2013)",
                        "beskrivelse" => "A man goes to extreme lengths to save his family from punishment after the family commits an accidental crime.",
                        "link" => "https://www.imdb.com/title/tt3417422/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=690bec67-3bd7-45a1-9ab4-4f274a72e602&pf_rd_r=GRDAR6F8WMCB5JK042VZ&pf_rd_s=center-4&pf_rd_t=60601&pf_rd_i=india.top-rated-indian-movies&ref_=fea_india_ss_toprated_tt_2",
                        "skuspiller" => "Mohanlal"
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