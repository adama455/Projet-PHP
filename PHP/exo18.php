

<?php

/* on dit bonjour et on passe à la ligne*/
echo "bonjour le monde\n voici une ligne de 8 etoile  ";

/* on compte jusqu'à 100*/

// for ($i=1 ; $i<=100 ; $i++) { /* boucle de 1 à 100 */
//     echo "$i\n"; /* affiche de $i et passage à la ligne */
// }    
// echo "\n";

// /* différence entre guillemet et apostropĥe */
// echo "sortie de la boucle, voici la valeur de i : $i\n";
// echo 'sortie de la boucle, voici la valeur de i : $i\n';
// echo "\n";

    /* une ligne d'étoiles et passage à la ligne */
    for ($i=1 ; $i<=8 ; $i++) {
             echo '*';
}
echo "<br>";

/* un carré de 10 lignes */
echo "carre de 8 ligne :<br> ";
for ($j=1 ; $j<=8 ; $j++) {
    /* une ligne d'étoiles et passage à la ligne */
    for ($i=1 ; $i<=8 ; $i++) {
        echo '*';
    }
    echo "<br>";
}

 echo  "triangle rectangle 1 <br><br>";
  for($i=1;$i<=8;$i++){
      for($j=1;$j<=$i;$j++){
          echo"**";
      }
      echo " <br>";
  }
    '<center>';
        echo  "triangle rectangle 2 <br><br>";
        for($i=8;$i>=1;$i--){
            for($j=1;$j<=$i;$j++){
                echo"**";
            }
            echo " <br>";
        }
    '</center>';

  echo  "triangle rectangle creux <br>";
  for($i=1;$i<=8;$i++){
    switch($i){
        case 5:
            for($j=1;$j<=2;$j++){
                echo"**";
            }
         
          break;
          case 6:
            for($j=1;$j<=3;$j++){
                echo"**";
            }
              break;
          default:
          for($j=1;$j<=$i;$j++){
            echo"**";
        }
    }
      
      echo " <br>";
  }

/* une table de multiplication de 10 lignes */
// for ($j=1 ; $j<=10 ; $j++) {

//     for ($i=1 ; $i<=10 ; $i++) {
//         echo $i*$j;
//         echo ' ';
//     }
//     echo "\n";

// }

/***** carré creux *****/
echo " carre creux <br>";
for ($j=1 ; $j<=8 ; $j++) {
        switch($j){
            case 1:
                for ($i=1 ; $i<=8 ; $i++) {
                    echo '*';
                } 
            echo "<br>";
            break;
            case 2:
                for ($i=1 ; $i<=8 ; $i++) {
                    echo '*';
                } 
            echo "<br>";
            break;
           
            case 7:
                for ($i=1 ; $i<=8 ; $i++) {
                    echo '*';
                } 
            echo "<br>";
            break;

            case 8:
                for ($i=1 ; $i<=8 ; $i++) {
                    echo '*';
                } 
            echo "<br>";
            break;
            default :  
            for ($i=1 ; $i<=4 ; $i++) {
                echo '*';
            }
            echo "<br>";
        }  
    }

/* les lignes creuses */
 echo " lignes creuses <br>";
// for ($j=1 ; $j<=8 ; $j++) {
//     /* une ligne creuse*/
    
//     echo "*";
//     for ($i=1 ; $i<=8 ; $i++) {
//         echo ' ';
//     }
//     echo "*<br>";
// }

//  uneligne d'étoiles et passage à la ligne 
// for ($i=1 ; $i<=10 ; $i++) {
//     echo '*';
// }
//  echo "<br>";


?>