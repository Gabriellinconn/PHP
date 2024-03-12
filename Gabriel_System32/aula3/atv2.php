<form action="" method="GET">
    <label> Digite a primeira nota: </label>
    <br><br><input name ="n1"  type="text">

    <label> Digite a segunda nota: </label>
    <br><br><input name ="n2"  type="text">

    <label> Digite a terceira nota: </label>
    <br><br><input name ="n3"  type="text">

    <button type="submit">Calcular média</button>

<?php

$n1 = $_GET ['n1'];
$n2 = $_GET ['n2'];
$n3 = $_GET ['n3'];

echo "<p>A média do aluno é igual a " .($n1+$n2+$n3)/3;



?>