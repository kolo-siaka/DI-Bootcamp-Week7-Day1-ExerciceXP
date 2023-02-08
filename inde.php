<?php 

   require 'Exercice-XP.php';

   $ecrire = new MyClass();
   echo '<h2>Exercice XP 1</h2> <br>' ;
    $ecrire ->ech();
    echo '<h2>Exercice XP 2</h2> <br>' ;
    $valeur = 5 ;
      echo 'le Factorielle de '.$valeur.' est :'  .$ecrire ->fact($valeur);
      echo '<h2>Exercice XP 3</h2> <br>' ;

      $valeur = array(11, -2, 4, 35, 0, 8, -9);
      print_r($ecrire -> trie($valeur));
      echo '<h2>Exercice XP 2</h2> <br>' ;
       $date1=date_create("1981-11-03");
       $date2=date_create("2013-09-04");
       $ecrire ->Dateout($date1,$date2);
 ?>