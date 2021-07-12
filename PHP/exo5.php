<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function surface ($base,$hauteur){
        $surface=$base * $hauteur /2 ;
        echo "la surface du triangle est :".$surface;
    }  
    
    surface(2,12);
?> 
</body>
</html>