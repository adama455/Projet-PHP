<?php

// // affichage d'une note sur deux chiffres
function affiche_note ($n) {
  if ($n<10) {
    echo '0';
  }
  echo $n;
}

// affichage d'un tableau
function affiche_tableau ($t) {
  echo "tableau : ";
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    echo '| ';
    affiche_note($t[$i]);
    echo ' ';
  }
  echo "|<br>";
}

// recherche un élément dans un tableau
function recherche ($e,$t) {
  $i = 0;
  while (($i < sizeof($t)) && ($t[$i] != $e)) {
    $i = $i+1;
  }
  affiche_note($e);
  if ($i < sizeof($t)) {
    echo " est présent !<br>";
  } else {
    echo " est absent...<br>";
  }
}

// recherche un élément dans un tableau ordonné
function rechercheO ($e,$t) {
  $i = 0;
  while (($i < sizeof($t)) && ($t[$i] < $e)) {
    $i = $i+1;
  }
  affiche_note($e);
  if (($i < sizeof($t)) && ($t[$i]==$e)) {
    echo " présent !<br>";
  } else {
    echo " absent...<br>";
  }
}

// recherche dichotomique d'un élément dans un tableau ordonné
function recherche_dichotomique ($e,$t) {

  $g      = 0;
  $d      = sizeof($t)-1;
  $trouve = false;

  while (($g <= $d) && (!$trouve)) {
    $m = floor(($g+$d)/2);
    if ($t[$m] == $e) {
      $trouve = true;
    } else {
      if ($e < $t[$m]) {
    $d = $m-1;
      } else {
    $g = $m+1;
      }
    }
  }
  affiche_note($e);
  if ($trouve) {
    echo " présent !<br>";
  } else {
    echo " absent...<br>";
  }
}

// insertion d'un élément dans un sous-tableau
function insertion_dans_sous_tableau ($e,&$t,$n) {
  $i = $n;
  while (($i>=0) && ($t[$i]>$e)) {
    $t[$i+1] = $t[$i];
    $i = $i-1;
  }
  $t[$i+1] = $e;
}

// insertion d'un élément dans un tableau
// function insertion ($e,&$t) {
//   insertion_dans_sous_tableau($e,$t,sizeof($t)-1);
// }

// échange les contenus de deux cases d'un tableau
function echange (&$t,$i,$j) {
  $pro   = $t[$i];
  $t[$i] = $t[$j];
  $t[$j] = $pro;
}

// tri « insertion » d'un tableau
 function tri_insertion (&$t) {
  for ($i=1 ; $i<sizeof($t) ; $i=$i+1) {
    insertion_dans_sous_tableau($t[$i],$t,$i-1);
   }
 }

// tri « bulles » d'un tableau
function tri_bulles (&$t) {
  for ($i=1 ; $i<=sizeof($t)-1 ; $i=$i+1) {
    for ($j=0 ; $j<=sizeof($t)-$i-1 ; $j=$j+1) {
      if ($t[$j] > $t[$j+1]) {
    echange($t,$j,$j+1);
      }
    }
  }
}

// définitions de tableaux et tests

$notes_vrac_a = array(12,7,20,8,1,11,9,10,2,15,5,17);
$notes_vrac_b = array(12,7,20,8,1,11,9,10,2,15,5,17);
$notes_triees = array(2,5,7,8,10,11,12,15,17);


echo "\n--- recherche naïve dans tableaux quelconques ---<br>";
affiche_tableau($notes_vrac_a);
recherche(9,$notes_vrac_a);
recherche(16,$notes_vrac_a);

echo "\n--- recherche naïve dans tableaux ordonnés ---<br>";
affiche_tableau($notes_triees);
rechercheO(9,$notes_triees);
rechercheO(10,$notes_triees);

echo "\n--- recherche dichotomique dans tableaux ordonnés ---<br>";
affiche_tableau($notes_triees);
recherche_dichotomique(1,$notes_triees);
recherche_dichotomique(9,$notes_triees);
recherche_dichotomique(10,$notes_triees);
recherche_dichotomique(18,$notes_triees);

// echo "\n--- insertions dans des tableaux ordonnés ---<br>";
// affiche_tableau($notes_triees);
// insertion(9,$notes_triees);
// insertion(1,$notes_triees);
// insertion(20,$notes_triees);
// affiche_tableau($notes_triees);

echo "\n--- tri insertion de tableaux quelconques ---<br>";
affiche_tableau($notes_vrac_a);
tri_insertion($notes_vrac_a);
affiche_tableau($notes_vrac_a);

echo "\n--- tri bulles de tableaux quelconques ---<br>";
affiche_tableau($notes_vrac_b);
tri_bulles($notes_vrac_b);
affiche_tableau($notes_vrac_b);

echo "<br>";
?>