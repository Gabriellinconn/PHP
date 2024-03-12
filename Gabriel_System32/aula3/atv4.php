<form action="" method="GET">
<label>base: </label>
<input name="b" type="text">

<label>altura: </label>
<input name="a" type="text">

<button type="submit">Converter</button>

</form>

<?php

$b = $_GET ['b'];
$a = $_GET ['a'];

echo "A área do retângulo é: ".($b*$a);
echo "<br>E o dobro deste retângulo é: ".(2*($b*$a));

?>