<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul salair</title>
</head>
<body>
     <div style="width: 50%; margin: 50px;">
    <form action="" method="post">
       <fieldset >
          <legend>Calcul salair</legend>
          <input type="text" placeholder="donnez votre Nom " name="nom" required><br><br>
          <input type="text" placeholder="donnez votre Prenom " name="prenom" required><br><br>
          <input type="text" placeholder="donnez votre salair brut " name="salair" required><br><br>
          <label for="">Sexe : </label><br>
          <label for="radio">masculin</label><input type="radio"  name="sex" value="masculin"required >
          <label for="radio">Feminin</label><input type="radio" name="sex"value="feminin" required><br><br>
          <label for="">Avez vous  des  personnes à charges? Combien ? </label><br>
          <input type="text" name="charge" required><br><br>
          <input type="submit" value="valider" name="submit">
      </fieldset>
    </form>
    <?php
      $salair_apres_calcul;
        if(isset($_POST['submit']))
        {
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $salair=$_POST['salair'];
            $charge=$_POST['charge'];
            $sex=$_POST['sex'];

          // j'ai fai la  somme des  trois  frais 
          // 18% +7% + 5% ==30%
            if($charge==3){
                    if($sex==='feminin'){
                        $salair_apres_calcul=($salair*27)/100;
                          echo "Mm ".$nom." ".$prenom."Etant femme , ayant aussi des charges vous aves  une  reduction de 3% votre salair est: ".($salair-$salair_apres_calcul);
                    }else{
                  $salair_apres_calcul=($salair*29)/100;
                      echo "Monsieur ".$nom." ".$prenom." vous aves  une  reduction de 1% votre salair est: ".($salair - $salair_apres_calcul);
                    }      
                }elseif($charge==4){
                  if($sex==='feminin'){
                    $salair_apres_calcul=($salair*27)/100;
                      echo "Mm ".$nom." ".$prenom."Etant femme , ayant aussi des charges vous aves  une  reduction de 3% votre salair est: ".($salair-$salair_apres_calcul);
                }else{
                  $salair_apres_calcul=($salair*26)/100;
                  echo "Monsieur ".$nom." ".$prenom." vous aves  une  reduction de 4% votre salair est: ".($salair-$salair_apres_calcul);
                }
            }
            // else if($charge=5 and $sex=="feminin"){
            //    $salair_apres_calcul=($salair*27)/100;
            //       echo "Mm ".$nom." ".$prenom."Etant femme , ayant aussi des charges vous aves  une  reduction de 3% votre salair est: ".$salair_apres_calcul;
            // }
            else{
                  $salair_apres_calcul=($salair*30)/100;
                  echo "Monsieur ".$nom." ".$prenom."  votre salair est: ".($salair - $salair_apres_calcul);
            }
          

        }
    ?> 
    </div>
</body>
</html>