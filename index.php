<!-- Creare una variabile che contiene del testo. Leggere dal parametro in GET una badword da cercare all'interno del testo e censurarla, ossia visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword sono sostituite da tre "*". -->

<?php
  // Leggere dal parametro in GET una badword da cercare all'interno del testo
  $badword = $_GET['censura_parola'];
  // Creare una variabile che contiene del testo
  $frase = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  // visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword sono sostituite da tre "*"
  $sostituisci = str_replace($badword, '***', $frase);
  print_r($sostituisci);


?>
