<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv2</title>
</head>
<body>

    <form action="" method="GET">
        <label>número 1</label>
        <input name= "num1" type="text">

        <label>número 2</label>
        <input name= "num2" type="text">
        <button type="submit">comparar</button>
    </form>


    <?php

    $n1 = $_GET ['num1'];  
    $n2 = $_GET ['num2'];  


    if($n1==$n2){
        echo "O valor " . $n1 . " é igual a " .$n2;

    }
    else if($n2>$n1){
        echo "O valor " . $n2 . " é maior que " .$n1;

    }else{
        echo "O valor " . $n1 . " é maior que " .$n2;

    }

    ?>

</body>
</html>