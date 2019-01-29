
<!DOCTYPE html>
<html lang="nb">
  <head>
    <meta charset="utf-8"/>
    <title> Lag </title>
    <link rel="stylesheet" type="text/css" href="../css/stilark.css"/>
  </head>
  <body class="container">
    <header>
      <h1> Barcelona CF </h1>
    </header>
    <nav>
        <a href="lag.php"> Home </a>
    </nav>
    <main>
      <article>
        <?php echo "<strong> <h2> Om Barcelona CF </h2> </strong> "; ?>
        <?php echo "<strong> <p> Land: </strong> Spania </p> ";?>
        <?php echo "<strong> <p> Liganavn: </strong> La Liga </p>  "; ?>
        <?php echo "<strong> <p> Trener: </strong> Ernesto Valverde </p> "; ?>
        <?php echo  "<strong> <p> La Liga trofeer etter år 2000: </p> </strong>"; ?>
        <?php
          $laliga_trofeer = array(
            "a"=>"2017/2018",
            "b"=>"2015/2016",
            "c"=>"2014/2015",
            "d"=>"2012/2013",
            "e"=>"2010/2011",
            "f"=>"2009/2010",
            "g"=>"2008/2009",
            "h"=>"2005/2006",
            "i"=>"2004/2005")
          ?>
          <?php
            foreach($laliga_trofeer as $laliga => $vunnet){
          ?>
            <?php echo $vunnet; ?>
            <?php echo  "<br>" ?>
          <?php  } ?>

        <?php echo "<strong> <p> Hjemlige vunnet cuper etter år 2000: </p> </strong>"; ?>
        <?php
          $hjemlige_cuper = array(
              "a"=>"2017/2018",
              "b"=>"2016/2017",
              "c"=>"2015/2016",
              "d"=>"2014/2015",
              "e"=>"2013/2014",
              "f"=>"2011/2012",
              "g"=>"2008/2009")
         ?>
         <?php
            foreach($hjemlige_cuper as $hc => $hct){
          ?>
           <?php echo $hct; ?>
           <?php echo "<br>"; ?>
        <?php } ?>

        <?php echo "<strong> <p> Champions League trofeer: </p> </strong>"; ?>
        <?php
          $champions_league = array(
            "a"  => "2014/2015",
            "b"  => "2010/2011",
            "c"  => "2008/2009",
            "d"  => "2005/2006")
          ?>
          <?php
            foreach($champions_league as $cl => $clt){
            ?>
            <?php echo $clt; ?>
            <?php echo "<br>";  ?>
          <?php } ?>

      </article>
    </main>
    <footer>
      <?php echo "<p> &copy; Bereket G. Adhanom </p>"; ?>
      <a href="mailto:bereketa@hiof.no"> E-post </a>
    </footer>
  </body>
</html>
