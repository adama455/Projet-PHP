<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function tableau (){
          $tab=array(1,2,3,4,0,5,6,0,9,10,0);
        //   print_r($tab);
         
          for ($i=0;$i<10;$i++){
              echo $tab[$i];
          }
          echo"\n";
        //   echo " apres suppression";
           array_filter($tab);
        //  print_r($tab);
         for ($i=0;$i<10;$i++){
             if (empty($tab[$i]))
                  unset($tab[$i]);
            print_r ($tab[$i]);
        }
      }
          tableau();
   ?> 
</body>
</html>