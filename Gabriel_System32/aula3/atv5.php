<form action="" method="GET">
<label>$ por Hora: </label>
<input name="b" type="text">

<label>Horas trabalhadas: </label>
<input name="a" type="text">

<button type="submit">Converter</button>

</form>

<?php

$b = $_GET ['b'];
$a = $_GET ['a'];

echo "Salário: R$".($b*$a);


?>