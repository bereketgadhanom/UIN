<!doctype HTML>
<html>
    <head>
        <title>PHP-variabler</title>
    </head>
    <body>
        <?php
            //tekstvariabel
            $tekstvariabel = "Dette er en tekstvariabel";

            //variabel med tall
            $tallvariabel = 42;

            //variabel med array
            $arrayvariabel = array();

            echo "<p>Jeg har følgende variabler:</p>
                <ul>
                    <li>Tekstvariabelen inneholder " . $tekstvariabel . "</li>
                    <li>Tallvariabelen inneholder " . $tallvariabel . "</li>
                    <li>Arrayvariabelen inneholder " . $arrayvariabel . "</li>
                </ul>
            ";
        ?>

        <h2>GET-variabler</h2>
        <?php
            //GET-variabelen "navn":
            $navn = $_GET['navn'];
            $enavn = $_GET['enavn'];

            $fulltnavn = $_GET['navn'] . " " . $_GET['enavn'];

            echo "<p>Et navn: " . $fulltnavn . "</p>";
        ?>

        <h2>POST-variabler</h2>
        <form action="" method="post">
            <input name="fornavn" type="text" />
            <button type="submit" name="lagre"> Lagre </button>
        </form>

        <?php
            echo "<p>Et navn: " . $_POST['fornavn'] . "</p>";
        ?>

    </body>
</html>
