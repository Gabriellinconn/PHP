<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv</title>
</head>
<body>

    <form action="" method="GET">
        <label>número</label>
        <input name= "num" type="text">
        <button type="submit">análise</button>
    </form>


    <?php

    $n = $_GET ['num'];  
    


    if($n<0){
        echo "O valor " . $n . " é negativo";
    }else echo "O valor ".$n. " é positivo";

  

    ?>

</body>
</html>