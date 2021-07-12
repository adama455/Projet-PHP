<?php

// affichage d'un tableau
function affiche_tableau ($t) {
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    echo ' ';
    echo $t[$i];
  }
  echo "\n";
}

// calcul de la moyenne des éléments d'un tableau t
function moyenne ($t) {
  $somme = 0;
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    $somme = $somme + $t[$i];
  }
  echo 'la moyenne vaut ',($somme/sizeof($t))."<br>";
}

// combien ont eu la moyenne dans un tableau de notes t
function onteulamoyenne ($t) {
  $fois = 0;
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    if ($t[$i]>=10) {
      $fois = $fois + 1;
    }
  }
  echo " $fois ont eu la moyenne <br>";
}

// meilleure note
function notemax ($t) {
  $max = 0;
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    if ($t[$i] > $max) {
      $max = $t[$i];
    }
  }
  echo "la note maximale est $max .<br>";
}

// teste si quelqu'un a eu 20
function ya20 ($t) {
  $i = 0;
  foreach($t as $val){
        //  echo "$val\n";
        if($val==20){
          $i++;
        }
     }if($i==0){
       echo "personne n'a eu 20/20 <br>";
     }else
       echo $i." ont eu 20 <br>"; 
}


// appels aux procédures définies ci-dessus sur un tableau de notes

// définition d'un tableau
$notes    = array(5,12,8,20,10);
// ajout d'un élément
$notes[]  = 13.5;
// modification de la case numéro 2
$notes[2] = 9;
// affichage du tableau par php
echo "les element du tableau sont : ";
affiche_tableau($notes)."<br>";
 echo "<br>";
// affichage de la taille du tableau
echo "il y'a ".sizeof($notes)." cases dans ce tableau <br>";
// affichage par notre procédure
// moyenne de la promo
moyenne($notes)."<br>";
// combien de personnes ont eu la moyenne ?
onteulamoyenne($notes)."<br>";
// quelle est la note maximale obtenue ?
notemax($notes)."<br>";
// est-ce quelqu'un a eu 20 ?
ya20($notes)."<br>";