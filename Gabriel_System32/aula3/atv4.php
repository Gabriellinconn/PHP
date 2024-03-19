<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv2</title>
</head>
<body>

    <form action="" method="GET">
        <label>Insira uma letra</label>
        <input name= "ler" type="text">
        <button type="submit">Enviar</button>
    </form>


    <?php

    $ler = strtoupper($_GET ['ler']);  
    


    switch($ler){
        case 'A':
            echo $ler. " é vogal";
            break;
            case 'E':
                echo $ler. " é vogal";
                break;
                case 'I':
                    echo $ler. " é vogal";
                    break;
                    case 'O':
                        echo $ler. " é vogal";
                        break;
                        case 'U':
                            echo $ler. " é vogal";
                            break;

        default:
            echo $ler. " é consoante";
            
    }
        

  

    ?>

</body>
</html>