<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 function mot (){
          $frase="Le langage PHP est un langage orienté objet";
          echo  "la phrase compte ".str_word_count($frase)." mot";
 }
 mot();
    ?>
</body>
</html>