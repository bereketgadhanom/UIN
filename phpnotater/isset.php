<!doctype HTML>
<html>
    <head>
        <title>ISSET og EMPTY</title>
    </head>
    <body>
      <form action="" method="post">
          <input name="fornavn" type="text" />
          <button type="submit" name="lagre"> Lagre </button>
      </form>
      <?php
        if(ISSET($_POST['lagre'])) {
          if(EMPTY($_POST['fornavn'])){
            echo "<p> Feltet må oppfylles </p>";
          }
          else {
            echo "<p>Et navn: " . $_POST['fornavn'] . "</p>";
          }

        }

      ?>
    </body>
</html>
