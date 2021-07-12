<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function programme ($nbr1,$nbr2,$nbr3){
    if($nbr1>$nbr2 && $nbr1>$nbr3){
        echo $nbr1." est supérieur ";
      }else if($nbr2>$nbr1 && $nbr2>$nbr3){
        echo $nbr2." est supérieur ";
      }else{
        echo $nbr3." est supérieur ";
      }
    }
      programme(6,50,100);
    ?>
</body>
</html>