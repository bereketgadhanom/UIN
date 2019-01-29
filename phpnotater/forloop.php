
<!DOCTYPE html>
<html lang="nb">
  <head>
    <meta charset="utf-8"/>
    <title> Løkker</title>
    </head>
  <body>
    <?php
      for($i = 1; $i < 11; $i++){
        echo $i ."<br />";
      }
     ?>
     <h2> Handleliste </h2>
     <ul>
       <?php
        $handleliste = array("Brød","Melk","sjokolade","Ost","Smør");
          $handlelistelengde = count($handleliste);
          for($vare = 0; $vare <= $handlelistelengde;$vare++){
            echo "<li>". $handleliste[$vare] . "</li>" ;
          }
        ?>
     </ul>
  </body>
</html>
