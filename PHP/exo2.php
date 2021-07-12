<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre aleatoire</title>
</head>
<body>
  <!-- <form action="" method="post">
       <fieldset>
          <legend>Devinette</legend>
          <label for=""></label><br>
          <input type="nombre" name="nombre" placeholder="">
          <input type="submit" name="submit">
       </fieldset>
  </form> -->
    <?php

    // $coup=0;
    // // while($nombre != $nombre_alea){
    //     $nombre_alea=rand(1,100);
    //     echo $nombre_alea;
    //      if(isset($_POST['submit'])){
    //          $nombre=$_POST['nombre'];
    //          if($nombre>$nombre_alea){
    //              echo $nombre."c'est grand ";
    //          }elseif($nombre<$nombre_alea){
    //              echo $nombre."c'est petit ";
                 
    //          }else{
    //             echo " Bravo ! vous l'avez trouvé aprés".$coup."tentatives";
    //          }
    //      }
    //      $coup++;
    // Implémentez un «jeu de nombre de devinettes» en PHP. Conservez le numéro secret dans le cookie de l’utilisateur et indiquez «Monter» ou «Descendre» après chaque essai.

    // Sur la page de démarrage du jeu (php), l'utilisateur entre son nom, démarre la session du cookie et clique sur le bouton [Commencer le jeu]. 
    // Le code génère un numéro secret aléatoire compris dans la plage [1..100]. 
    // Vous pouvez le modifier en changeant la valeur du cookie ( setcookie('my_rand',rand(1,100)); )
    // L’objectif de l’utilisateur est de deviner le numéro secret. Après chaque proposition, le code renvoie si le joueur a gagné ou non. 
    
    // S'il le joueur a gagné ça lance une vidéo Youtube !!
    
    // “Monter” - lorsque le nombre secret est supérieur au nombre entré. L'utilisateur peut entrer une nouvelle proposition à nouveau.
    // “Descendre” - lorsque le nombre secret est inférieur au nombre entré. L'utilisateur peut entrer une nouvelle proposition à nouveau.
    /*---------------------------------------------------------------*/
/*
    Titre : Jeu de devinettes                                                                                             
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=1081
    Auteur           : KOogar                                                                                             
    Date édition     : 29 Juil 2019                                                                                       
    Date mise à jour : 28 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/?>
<html>
    <body>
        <?php
            unset($_COOKIE['mon_login']);
            setcookie('mon_login', '', time() - 3600, '/');
        ?>        
        <form action="" method="GET"><br>
            Name: <input type="text" name="login"><br><hr />
        <input type="submit" value="Commencer le jeu">
        </form>


    <?php
        function compare_two_numbers($number_A, $number_B){
            if ($number_A == $number_B){
                echo "Super vous avez gagné!!";
                $GLOBALS['b_match'] = true;        
            }
            if ($number_A > $number_B){
                echo "Faut descendre.";
            }
            if ($number_A < $number_B){
                echo "Faut monter.";
            }
        }
    ?>


    <?php
        $GLOBALS['b_match'] = false;
        
        if(isset($_GET['numero_invite'])){
            setcookie('mon_invite',$_GET['numero_invite']);
            $_COOKIE['mon_invite'] = $_GET['numero_invite'];
        }else{
            unset($_COOKIE['mon_invite']);
            setcookie('mon_invite', '', time() - 3600, '/');
        }
        
        if(isset($_GET['login'])){
            setcookie('mon_login',$_GET['login']);
            setcookie('my_rand',rand(1,100));
            $_COOKIE['mon_login'] = $_GET['login'];
            $GLOBALS['b_match'] = false;  
        }
    if (isset($_COOKIE['mon_login']))    echo "Welcome " . $_COOKIE['mon_login']
 . "!";
        
        if(isset($_COOKIE['mon_invite'])){
            echo "</br>";
            if (is_numeric($_COOKIE['mon_invite'])){
                echo "Tu as choisi " . $_COOKIE['mon_invite'] . ".</br>";
            }else {
                echo "S'il vous plait, donnez-moi des valeurs numériques! :)"
 . ".</br>";
            }
                
            
            echo "Aléatoire " . $_COOKIE['my_rand'] . ".</br>";
            compare_two_numbers($_COOKIE['mon_invite'], $_COOKIE['my_rand']);
            echo "</br>";
        } else {
            echo "</br>";
            echo "Deviner n'est pas difficile! :)";
        }
        
        if (!$GLOBALS['b_match']){
            echo "</br>";
            echo "Essaie de deviner:";
            echo "</form>";
            echo "<form action='' method='get'>";
            echo "Numero: <input type = 'text' name = 'numero_invite'>";
            echo "<input type='submit'>";
            echo "</form>";   
        } else {
            echo "<hr />";
//             echo 
// "<iframe width='420' height='315'" .
// " src='https://www.youtube.com/embed/UWLIgjB9gGw' frameborder='0' allowfullscr" .
// "een></iframe>";
            echo "<hr />";
            echo "<form action=''><br>";
            echo "<input type='submit' value='Osez jouer a nouveau?'>";
        }
    ?>
</body>
</html>