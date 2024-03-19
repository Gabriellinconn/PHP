<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv</title>
</head>
<body>

    <form action="" method="GET">
        <label>nota 1</label>
        <input name= "n1" type="text">

        <label>nota 2</label>
        <input name= "n2" type="text">

        <button type="submit">Tirar média</button>
    </form>


    <?php

    $n1 = $_GET ['n1'];
    $n2 = $_GET ['n2'];  

    $media=($n1+$n2)/2;
    
    echo "<br>Média: ".$media;
    if($media<6){
        echo " Reprovado";
    }else if($media>=10){
        echo " Aprovado com Distinção";
    }else 
        echo " Aprovado";
  

    ?>

</body>
</html>