<!-- Creare una variabile che contiene del testo. Leggere dal parametro in GET una badword da cercare all'interno del testo e censurarla, ossia visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword sono sostituite da tre "*". -->

<?php
  // Leggere dal parametro in GET una badword da cercare all'interno del testo
  $badword = $_GET['testo'];
  // Creare una variabile che contiene del testo
  $frase = 'Lorem ipsum dolor sit amet. Duis aute irure dolor in reprehenderit in voluptate.';

  // visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword sono sostituite da tre "*"
  $sostituisci = str_replace($badword, '***', $frase);
  print_r($sostituisci);


?>
