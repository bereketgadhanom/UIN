
<?php
  if(!empty($_POST) && !empty($_POST['select'])){
     // print_r($_POST);
     $url = $_POST['select'];
    header("Location:{$url}");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="nb">
  <head>
    <meta charset="utf-8"/>
    <title> Lag </title>
    <link rel="stylesheet" type="text/css" href="../css/stilark.css"/>
  </head>
  <body>
    <center>
    <h2> Footballag </h2>
    <?php
        $footballag = array(
          'Velg lag' => '',
          'Ajax' => 'https://www.colgate.com/app/PDP/Ajax/US/EN/Home.cwsp',
          'Barcelona CF' => 'barsa.php',
          'Manchester United'=> 'manu.html',
          'Rosenborg Fotballklubb' => 'rosenborg.html',
        );
      ?>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <select name="select">
          <?php
            foreach($footballag as $lag => $detalje){
          ?>
          <option value="<?php echo $detalje; ?>"> <?php echo $lag; ?> </option>
        <?php } ?>
        </select>
        <button name="velg" type="submit"> Velg </button>
      </form>
    </center>
    <footer>
    </footer>
  </body>
</html>
