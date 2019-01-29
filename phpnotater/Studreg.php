<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registrering system</title>
    <link rel="stylesheet" href="stil.css" />
</head>
<body>
    <header>
    <h1>Student registrasjon</h1>
    <nav>
        <a href="index.php"> Registrer deg </a>
        <a href="kalender.php"> Se veilednings kalender </a>
        <a href="index.php"> Registrer deg </a>
        <a href="index.php"> Registrer deg </a>
    </nav>
    </header>
    <main>
        <form class="form-style-5" action="reg.php" method="post">
           <fieldset> 
              <legend> 
                <span class="number"> 1</span> Person informasjon
                </legend> 
                <label for="navn"> Navn</label>
                <input type="text" name="navn" id="navn" required />
               
                <label for="epost"> Epost</label>
                <input type="email" name="epost" id="epost"  />

                <label for="studie"> Studie</label>
                <select type="studie" name="studie" id="studie"  />
                    <?php
                        require("data.php");
                        foreach($studier as $key => $value){
                            echo "<option value='' " . $key . ">". $value. "</option>";
                        }
                    ?>
                </select>
                </fieldset>
            <fieldset> 
              <legend> 
                <span class="number"> 2 </span> Prosjektinformasjon
                <p> Tar du kurset som valgt fag</p>
                </legend> 
                <input type="radio" name="valgfag" value="ja"  id="valgfag-ja />
                <input type="radio" name="valgfag" value="ja"  id="valgfag-ja />
                 <label for="valgfag-ja"> Ja</label>
                
                 <input type="radio" name="valgfag" value="ja"  id="valgfag-ja />
                <input type="radio" name="valgfag" value="nei"  id="valgfag-nei/>
                 <label for="valgfag-nei"> Nei</label>
    
                </select>
                <div id="kravspek-container" >
                <label for="kravspek"> Kravspeksifikasjon</label>
                <select type="kravspek" name="kravspek" id="kravspek"  />
                    <?php
                        foreach($kravspeksifikasjoner as $key => $value){
                            echo "<option value='' " . $key . ">". $value. "</option>";
                        }
                    ?>
                </select>
                </div>
                </fieldset>
        </form>
        
    </main>
</body>
</html>