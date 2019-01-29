<!doctype HTML>
<html>
    <head>
        <title> Arrayer </title>
    </head>
    <body>
      <!-- Indeksert arrayer -->
      <h1> Indeksert arrayer </h1>
      <?php
        $handleliste = array("brød", "melk", "øl", "purke");
        // echo "<pre>";
        // var_dump($handleliste);
        // echo "</pre>";
       ?>
       <p> Jeg er tørst, og har lyst på <?php echo $handleliste[1]; ?>. </p>
       <!-- Assosiativ array  -->
       <h1> Studieprogram på IT-linje ved HIØ </h1>
        <ul>
          <li> <a href="?s=inf"> Informatikk </a> </li>
          <li> <a href="?s=dmd"> Digitale Medier og Design </a> </li>
          <li> <a href="?s=ist"> Informasjonsystemer </a> </li>
          <li> <a href="?s=ing"> Dataingeniør </a> </li>
          <li> <a href="?s=aar"> Årstudium </a> </li>
        </ul>

        <?php
        $studieprogram = array(

          'ing' => array( 'Informatikk - design og utvikling av IT-systemer',
          'title' => 'Dataingeniør',
          'beskrivelse' => 'Dette er dataingeniør studie.',
          'link' => 'https://www.hiof.no/studier/emner/it/2005/host/itf10606.html',
          );

        );

         ?>
       <!-- <?php
          // $studieprogram = array(
          //
          //   'inf' => 'Informatikk - design og utvikling av IT-systemer',
          //   'ing' => 'Dataingeniør',
          //   'dmd' => 'Digitale Medier og Design',
          //   'ist' => 'Informasjonsystemer',
          //   'aar' => 'Årstudium'
          // );
          // echo "<pre>";
          // var_dump($studieprogram);
          // echo "</pre>";

        ?> -->
        <p> Jeg er student på programmet <?php echo $studieprogram[$_GET['s']]['title']; ?> </p>
        <p> Jeg er student på programmet <?php echo $studieprogram[$_GET['s']]['beskrivelse']; ?> </p>
        <p> Jeg er student på programmet <?php echo $studieprogram[$_GET['s']]['link']; ?> </p>
    </body>
</html>
