<form action="" method="GET">
    <label> Digite um número:</label>
    <input name ="num1"  type="text">
    

    <label> Digite um número:</label>
    <input name ="num2" type="text">
    <button type="submit">enviar</button>

    <p>soma dos dois numeros vezes o primeiro</p>
</form>

<?php


$num1 = $_GET['num1'];
$num2 = $_GET['num2'];



echo "O calculo resultou " . (($num1+$num2)*$num1);



?>
