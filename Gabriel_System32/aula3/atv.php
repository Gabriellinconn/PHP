

<form action="" method="GET">
    <label> Digite um número:</label>
    <input name ="num1"  type="text">
    

    <label> Digite um número:</label>
    <input name ="num2" type="text">
    <button type="submit">enviar</button>
</form>

<?php


$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

echo "A soma dos números é " . ($num1+$num2);



?>

