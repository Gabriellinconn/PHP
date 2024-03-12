<form action="" method="GET">
<label>numero inteiro: </label>
<input name="a" type="number">

<label>numero inteiro: </label>
<input name="b" type="number">

<label>numero real: </label>
<input name="c" type="text">

<button type="submit">Converter</button>

</form>

<?php

$b = $_GET ['b'];
$a = $_GET ['a'];
$c = $_GET ['c'];


echo "<p>A) ".($a*2)*($b/2);
echo "<p>B) ".($a*3)+($c);
echo "<p>C) ".($c**3);


?>