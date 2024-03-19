<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv1</title>
</head>
<body>

    <form action="" method="GET">
    <label>F ou M:</label>
    <input name= "sexo" type="text">
    <button type="submit">Enviar</button>
    </form>

    
    <?php

    $sexo = strtoupper($_GET['sexo']);
    echo "<br>Sexo BB: " . $sexo;

    switch ($sexo){
        case 'F':
            echo "<br>Você escolheu F - Feminino";
            break;
        
        case 'M': 
            echo "<br>Você escolheu M - Masculino";
            break;
        default:
            echo "Opção inválida";
        
    }

    ?>

</body>
</html>