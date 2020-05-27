<?php
  $zufallsTexte[] = file_get_contents ("texte/mk_alternatives_universum.txt",) ;
  $zufallsTexte[] = file_get_contents ("texte/da_alpha_omega.txt",) ;
  $zufallsTexte[] = file_get_contents ("texte/mm_abba.txt",) ;
  $zufallsTexte[] = file_get_contents ("texte/r_identitat.txt",) ;
  $zufallsTexte[] = file_get_contents ("texte/sm_wartezimmer.txt",) ;
 
  $zufallsIndex =  rand(0,sizeof($zufallsTexte)-1); 
  echo $zufallsTexte[$zufallsIndex];
?>